<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accountsettings extends CI_Controller {

	public function index(){

		$data['title'] = 'Account Settings';
	
		$this->load->view('accountsettings', $data);
	}
}
