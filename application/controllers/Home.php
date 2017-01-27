<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_review');
		$this->load->helper('text');
	}

	public function index()
	{

		$data['review_item'] = $this->model_review->get_review_all();	
		$this->load->view('home',$data);

	}

	
}