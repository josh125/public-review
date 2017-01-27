<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_share extends MY_Controller{

		public function __construct(){
			parent::__construct();

			$this->load->model('model_review');

		}

	public function people($id){
		$r_id = $this->uri->segment(3);

		$s = $this->db->get('people')->result();

		foreach($s as $r){
			$pep_id = $r->pep_id;
		}

		$data['reviews'] = $this->model_review->pep_review($r_id,$pep_id);
		$this->load->view('reviews/pep_review_share', $data);
	}	

	public function place($id){
		$this->output->enable_profiler(TRUE);
		$r_id = $this->uri->segment(3);

		$s = $this->db->get('places')->result();

		foreach($s as $r){
			$place_id = $r->place_id;
		}

		$data = array('review_id' => $id);

		$data['reviews'] = $this->model_review->place_review($r_id,$place_id);
		$this->load->view('reviews/place_review_share', $data);
	}

	public function biz($id){
		$r_id = $this->uri->segment(3);

		$s = $this->db->get('review_biz')->result();

		foreach($s as $r){
			$biz_id = $r->biz_id;
		}

		$data = array('review_id' => $id);

		$data['reviews'] = $this->model_review->biz_review($r_id,$biz_id);
		$this->load->view('reviews/biz_review_share', $data);
	}		

	public function web($id){
		$r_id = $this->uri->segment(3);

		$s = $this->db->get('website')->result();

		foreach($s as $r){
			$web_id = $r->web_id;
		}
		
		$data = array('review_id' => $id);

		$data['reviews'] = $this->model_review->web_review($r_id,$web_id);
		$this->load->view('reviews/web_review_share', $data);
	}

	public function thing($id){
		$this->output->enable_profiler(TRUE);
		
		$r_id = $this->uri->segment(3);

		$s = $this->db->get('things')->result();

		foreach($s as $r){
			$th_id = $r->th_id;
		}
		
		$data = array('review_id' => $id);

		$data['reviews'] = $this->model_review->thing_review($r_id,$th_id);
		$this->load->view('reviews/thing_review_share', $data);
	}


}