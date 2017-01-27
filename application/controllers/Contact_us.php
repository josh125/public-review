<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_contact');
	}

	public function index()
	{
		$this->load->view('contact');
	}

	public function add_message()
	{
		$data_entry = array(

			'contact_name' => $this->input->post('name'),
			'contact_email' => $this->input->post('email'),
			'contact_subject' => $this->input->post('subject'),
			'contact_message' => $this->input->post('comment')
			);

		$this->model_contact->add_contact_message($data_entry);
		$id = $this->db->insert_id();
		$this->session->set_flashdata('message','Thank you for sending us a message!');
		redirect('contact_us');
	}
} 