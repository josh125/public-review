<?php

class Model_user extends MY_Model{

	protected $_table_name = 'users';
	protected $_primary_key = 'user_id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	public $rules = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|trim'
			), 

		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|trim|alpha_numeric'
			)
		);

	public function check_user(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hash = hash('sha512', $password . SALT);
		$status = '1';

		$query = $this->db->where('email', $email)
						  ->where('password', $hash)
						  ->where('status', $status)
						  ->limit(1)
						  ->get('users');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}				  	
	}


	public function check_user_active(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hash = hash('sha512', $password . SALT);
		$status = '0';

		$query = $this->db->where('email', $email)
						  ->where('password', $hash)
						  ->where('status', $status)
						  ->limit(1)
						  ->get('users');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}				  

	}

	public function sign_user(){
		$email = $this->input->post('email');

		$query = $this->db->where('email', $email)
						  ->limit(1)
						  ->get('users');

		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}				  
	}

	public function register_new($data_registry){
		$this->db->insert('users',$data_registry);
	}

	public function check(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hash = hash('sha512', $password . SALT);

		$status = '1';

		$query = $this->db->where('email',$email)
						  ->where('password', $hash)
						  ->limit(1)
						  ->get('users');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}				  	

	}


	public function email_check($email)
	{

		$sql = "SELECT firstname, email FROM users WHERE email = '{$email}' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();

		return ($result->num_rows() === 1 && $row->email) ? $row->firstname : FALSE;

	}

	public function verify_reset_password_code($email, $code)
	{
		$sql = "SELECT firstname, email FROM users WHERE email = '{$email}' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();

		if($result->num_rows() === 1){
			return ($code == md5($this->config->item('salt'). $row->firstname)) ? TRUE : FALSE;

		}else{
			return FALSE;
		}

	}

	public function update_password($email)
	{
		$pass = $this->input->post('password');
		$hash = hash('sha512', $pass . SALT);

		$sql = "UPDATE users SET password = '{$hash}' WHERE email = '{$email}' LIMIT 1";
		$this->db->query($sql);

		if($this->db->affected_rows() === 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}