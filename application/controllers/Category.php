<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('model_review');
	}

	public function index(){

		$this->load->view('category');

	}

	public function people($slug){
		$data = array('slug' => $slug);

		$data['pep'] = $this->model_review->pep_slug($slug);

		foreach($data['pep'] as $r){
			$id = $r->pep_id;
		}

		$data['reviews'] = $this->model_review->categ_pep_review($id);

		$this->load->view('category/pep_reviewpage',$data);

	}

	public function place($slug){

		$data = array('slug' => $slug);

		$data['place'] = $this->model_review->place_slug($slug);

		foreach($data['place'] as $r){
			$id = $r->place_id;
		}

		$data['reviews'] = $this->model_review->categ_place_review($id);

		$this->load->view('category/place_reviewpage',$data);

	}

	public function biz($slug){

		$data = array('slug' => $slug);

		$data['biz'] = $this->model_review->biz_slug($slug);

		foreach($data['biz'] as $r){
			$id = $r->biz_id;
		}

		$data['reviews'] = $this->model_review->categ_biz_review($id);

		$this->load->view('category/biz_reviewpage',$data);

	}

	public function web($slug){

		$data = array('slug' => $slug);

		$data['web'] = $this->model_review->web_slug($slug);

		foreach($data['web'] as $r){
			$id = $r->web_id;
		}

		$data['reviews'] = $this->model_review->categ_web_review($id);

		$this->load->view('category/web_reviewpage',$data);

	}

	public function thing($slug){

		$data = array('slug' => $slug);

		$data['thing'] = $this->model_review->thing_slug($slug);

		foreach($data['thing'] as $r){
			$id = $r->th_id;
		}

		$data['reviews'] = $this->model_review->categ_th_review($id);

		$this->load->view('category/thing_reviewpage',$data);

	}

	public function add_pep_review(){
		$user_id = $this->session->userdata('id');
		$pep_slug = $this->input->post('pep_slug');

		if($user_id != NULL ){	

			$r_id = $this->input->post('id');
			$categ_id = $this->input->post('category_id');

			$data = array(
				'comment' => $this->input->post('comment'),
				'review_title' => $this->input->post('title'),
				'rate' => $this->input->post('rate'),
				'category_id' => $this->input->post('category_id'),
				'pep_id' => $r_id,		
				'user_id' => $user_id		
				);

			$this->model_review->save($data);
			$id = $this->db->insert_id();

			redirect('category/people/'.$pep_slug,'refresh');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('category/people/'.$pep_slug, 'refresh');
		}

	}

	public function add_place_review(){
		$user_id = $this->session->userdata('id');
		$place_slug = $this->input->post('place_slug');

		if($user_id != NULL ){	

			$r_id = $this->input->post('id');
			$categ_id = $this->input->post('category_id');

			$data = array(
				'comment' => $this->input->post('comment'),
				'review_title' => $this->input->post('title'),
				'rate' => $this->input->post('rate'),
				'category_id' => $this->input->post('category_id'),
				'place_id' => $r_id,		
				'user_id' => $user_id		
				);

			$this->model_review->save($data);
			$id = $this->db->insert_id();

			redirect('category/place/'.$place_slug,'refresh');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('category/place/'.$place_slug, 'refresh');
		}
	}

	public function add_biz_review(){
		$user_id = $this->session->userdata('id');
		$biz_slug = $this->input->post('biz_slug');

		if($user_id != NULL ){	

			$r_id = $this->input->post('id');
			$categ_id = $this->input->post('category_id');

			$data = array(
				'comment' => $this->input->post('comment'),
				'review_title' => $this->input->post('title'),
				'rate' => $this->input->post('rate'),
				'category_id' => $this->input->post('category_id'),
				'biz_id' => $r_id,		
				'user_id' => $user_id		
				);

			$this->model_review->save($data);
			$id = $this->db->insert_id();

			redirect('category/biz/'.$biz_slug,'refresh');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('category/biz/'.$biz_slug, 'refresh');
		}
	}

	public function add_web_review(){
		$user_id = $this->session->userdata('id');
		$web_slug = $this->input->post('web_slug');

		if($user_id != NULL ){	

			$r_id = $this->input->post('id');
			$categ_id = $this->input->post('category_id');

			$data = array(
				'comment' => $this->input->post('comment'),
				'review_title' => $this->input->post('title'),
				'rate' => $this->input->post('rate'),
				'category_id' => $this->input->post('category_id'),
				'web_id' => $r_id,		
				'user_id' => $user_id		
				);

			$this->model_review->save($data);
			$id = $this->db->insert_id();

			redirect('category/web/'.$web_slug,'refresh');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('category/web/'.$web_slug, 'refresh');
		}
	}


	public function add_th_review(){
		$user_id = $this->session->userdata('id');
		$th_slug = $this->input->post('th_slug');

		if($user_id != NULL ){	

			$r_id = $this->input->post('id');
			$categ_id = $this->input->post('category_id');

			$data = array(
				'comment' => $this->input->post('comment'),
				'review_title' => $this->input->post('title'),
				'rate' => $this->input->post('rate'),
				'category_id' => $this->input->post('category_id'),
				'th_id' => $r_id,		
				'user_id' => $user_id		
				);

			$this->model_review->save($data);
			$id = $this->db->insert_id();

			redirect('category/thing/'.$th_slug,'refresh');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('category/thing/'.$th_slug, 'refresh');
		}
	}

	

}