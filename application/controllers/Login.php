<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		$this->load->library('form_validation');
		$this->load->helper(array('url','form','file','html'));

	}

	public function index()
	{

		$Logrules = $this->model_user->rules;
		$this->form_validation->set_rules($Logrules);

		if($this->form_validation->run() == FALSE){
			$this->load->view('login');

		}else{
			$valid_user = $this->model_user->check_user();
			$valid_user_active = $this->model_user->check_user_active();

			if($valid_user == FALSE){
				if($valid_user_active == FALSE){
					$this->session->set_flashdata('error', 'Your Email or Password are not correct');

				}else{
					$this->session->set_flashdata('error', 'Sorry this account is not active');
				}
				redirect('login');	

			}else{
				$this->session->set_userdata('id', $valid_user->user_id);
				$this->session->set_userdata('firstname',$valid_user->firstname);
				$this->session->set_userdata('lastname',$valid_user->last_name);
				$this->session->set_userdata('email', $valid_user->email);
				$this->session->set_userdata('group', $valid_user->group_id);

				switch($valid_user->group_id){
					case 1: //admin
						redirect('admin');

					break;
					
					case 2: //members
						redirect(base_url());

					break;
					
					default: break;		
				}
			}
		}
	}

	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());

	}

	public function reset_password()
	{

		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->load->view('reset_password');

		}else{
			$email = $this->input->post('email');
			$result = $this->model_user->email_check($email);

			if($result == FALSE){
				$this->session->set_flashdata('error', 'Your Email Address is not valid Please try again!');
				redirect('login/reset_password');

			}else{
				$this->send_reset_password_email($email, $result);
				$this->load->view('email/reset_email_send', array('email' => $email));

			}
		}
	}

	public function send_reset_password_email($email, $firstname)
	{
		$email_code = md5($this->config->item('salt') .$firstname);
		$reset_pass = base_url(). 'login/reset_password_form/'.$email .'/'.$email_code;
		$name = $firstname;

		$config['protocol'] = 'smtp'; //change to 'sendmail' if live
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change to 'ssl://smtp.googlemail.com' if live
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'jpdelossantos25@gmail.com'; //change this
		$config['smtp_pass'] = 'earthsnake125'; //change this
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

		$this->load->library('email');  
		$this->email->initialize($config);

		$this->email->from('jpdelossantos25@gmail.com', 'Public Review');
		$this->email->to($email); 
		$this->email->subject('Forgot Password');
		$message = $this->load->view('email/reset-email',array('reset_pass' => $reset_pass, 'firstname' => $name), TRUE);
	
		$this->email->message($message);

		if($this->email->send()) {  
			return true;
		} else {  
			return false;
		}

	}

	public function reset_password_form($email, $email_code)
	{

		$this->output->enable_profiler(TRUE);

		if(isset($email, $email_code)){
			$email = trim($email);
			$email_hash = sha1($email . $email_code);
			$verified = $this->model_user->verify_reset_password_code($email,$email_code);

			if($verified == FALSE){
				$this->session->set_flashdata('error', 'There was a problem in your link. Please request to reset a password again');
				redirect('login/reset_password');

			}else{
				$this->load->view('email/view_update_password', array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email));
			}
		}
	}

	public function update_password()
	{
		$this->output->enable_profiler(TRUE);

		$email = $this->input->post('email');
		$email_code = $this->input->post('email_code');

		if(!isset($_POST['email'],$_POST['email_hash']) || $_POST['email_hash'] !== sha1($_POST['email'] . $_POST['email_code'])){
			$this->session->set_flashdata('error', 'Error Updating your Password');
			$this->load->view('email/view_update_password');
		}

		// $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required|valid_email');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','New Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('repass','Confirm New Pasword', 'required|matches[password]');

		if($this->form_validation->run() == FALSE){
			redirect('login/reset_password_form/'.$email.'/'.$email_code);
			// $this->load->view('email/view_update_password');

		}else{

			$result = $this->model_user->update_password($email);

			if($result){
				$valid_user = $this->model_user->check();
				
					$this->session->set_userdata('id', $valid_user->user_id);
					$this->session->set_userdata('firstname', $valid_user->firstname);
					$this->session->set_userdata('group', $valid_user->group_id);

					switch($valid_user->group_id){
						case 1: //member
							redirect(base_url());
						break;
						
						default: break;	
					}

				$this->session->set_flashdata('message','You change your password successfully!');
				redirect(base_url());

			}
		}

	}
}
