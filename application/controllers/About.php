<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index(){

		$data['title'] = 'About Public Review';
	
		$this->load->view('about', $data);
	}
}
