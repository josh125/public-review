<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviewpage extends CI_Controller {

	public function index(){

		$data['title'] = 'Review Page';
	
		$this->load->view('reviewpage', $data);
	}
}
