<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{


	 public $data = array();	
	 function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('model_user');
		$this->data['errors'] = array();
	}
}