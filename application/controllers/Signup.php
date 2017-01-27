<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Signup extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('model_user');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname','Firstname','required|trim');
		$this->form_validation->set_rules('lname','Lastname','required|trim');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		$this->form_validation->set_rules('password','Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('repass','Password Confirmation', 'required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('signup');

		}else{

			$email = $this->input->post('email');
			$fname = $this->input->post('fname');
			$lastname = $this->input->post('lname');
			$pass = $this->input->post('password');
			$hash = hash('sha512', $pass . SALT);

			$data = array(

				'email' => $this->input->post('email'),
				'firstname' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'password' => $hash,
				'status' => '1',
				'group_id' => '2'
				);


			if($this->model_user->sign_user() == FALSE){
				$this->model_user->save($data);

				$this->form_validation->set_rules('email');
				$this->form_validation->set_rules('password');

				if($this->form_validation->run() == FALSE){
					$this->load->view('signup');

				}else{
					$valid_user = $this->model_user->check();
					if($valid_user == FALSE){
						$this->session->set_flashdata('error', 'Username or Password not Correct');
						redirect('login');

					}else{

						$result = $this->model_user->email_check($email);

						$this->send_email_register($email, $result);

						$this->session->set_userdata('id',$valid_user->user_id);
						$this->session->set_userdata('firstname',$valid_user->firstname);
						$this->session->set_userdata('lastname',$valid_user->last_name);
						$this->session->set_userdata('group',$valid_user->group_id);

						switch ($valid_user->group_id) {
							case 2: //member
								redirect(base_url());

							break;
							default: break;
								
						}
					}
				}
				
			}else{
				$this->session->set_flashdata('error', 'Your email is already exist');
				redirect('signup');
			}	
		}
	}

	public function send_email_register($email, $firstname)
	{

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
		$this->email->subject('Welcome to Public Review');

		$message = $this->load->view('email/public-email',array('firstname' => $name), TRUE);

		$this->email->message($message);

		if($this->email->send()) {  
			return true;
		} else {  
			return false;
		}
		
	}
}