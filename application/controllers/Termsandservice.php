<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Termsandservice extends CI_Controller {

	public function index(){

		$data['title'] = 'Term and Service';
	
		$this->load->view('termsandservice', $data);
	}
}
