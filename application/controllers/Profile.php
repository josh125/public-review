<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('model_review');
	}

	public function index($id){

		$data['title'] = 'Profile';

		$data['profile'] = $this->model_review->get_profile($id);

		$data['reviews'] = $this->model_review->profile_reviews($id);


		$this->load->view('profile', $data);
	}
}
