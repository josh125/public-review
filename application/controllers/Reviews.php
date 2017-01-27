<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->library('encrypt');
		$this->load->helper('text');
		$this->load->library('pagination');
		$this->load->model('model_review');



	}

	public function hotel($slug = NULL)
	{

		$data['hotel'] = $this->model_review->get_slug($slug);

		foreach($data['hotel'] as $hotel){
			$slug = $hotel->slug;
			$categ_id = $hotel->main_category_item_id;
		}


		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/hotel/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);
		$this->load->view('category/hotel_reviewpage',$data);
	} 

	public function resto($slug = NULL)
	{

		$data['resto'] = $this->model_review->get_slug($slug);

		foreach($data['resto'] as $resto){
			$slug = $resto->slug;
			$categ_id = $resto->main_category_item_id;
		}


		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/resto/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);

		$this->load->view('category/resto_reviewpage',$data);
	}

	public function attraction($slug = NULL)
	{

		$data['attract'] = $this->model_review->get_slug($slug);

		foreach($data['attract'] as $attract){
			$slug = $attract->slug;
			$categ_id = $attract->main_category_item_id;
		}

		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/attract/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);

		$this->load->view('category/attraction_reviewpage',$data);

	}

	public function web($slug = NULL)
	{

		$data['web'] = $this->model_review->get_slug($slug);

			foreach($data['web'] as $web){
			$slug = $web->slug;
			$categ_id = $web->main_category_item_id;
		}

		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/web/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);

		$this->load->view('category/web_reviewpage',$data);

	}

	public function people($slug = NULL)
	{

		$data['people'] = $this->model_review->get_slug($slug);

			foreach($data['people'] as $people){
			$slug = $people->slug;
			$categ_id = $people->main_category_item_id;
		}

		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/people/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);

		$this->load->view('category/people_reviewpage',$data);
	}

	public function biz($slug = NULL)
	{

		$data['biz'] = $this->model_review->get_slug($slug);

				foreach($data['biz'] as $biz){
			$slug = $biz->slug;
			$categ_id = $biz->main_category_item_id;
		}

		$total_rows = $this->model_review->record_count($slug);
		$config['base_url'] = base_url(). 'reviews/biz/'. $slug;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 2;
		$config['num_links'] = $total_rows;
		$config["uri_segment"] = 4;
		$config['enable_query_strings'] = TRUE;
		// $config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data['reviews'] = $this->model_review->fetch($config['per_page'],$page,$slug);

		$this->load->view('category/biz_reviewpage',$data);
	}

	public function movie($slug = NULL)
	{

		$data['movie'] = $this->model_review->get_slug($slug);
		$data['reviews'] = $this->model_review->get_slug_reviews($slug);

		$this->load->view('category/movie_reviewpage',$data);
	}

	public function music($slug = NULL)
	{

		$data['music'] = $this->model_review->get_slug($slug);
		$data['reviews'] = $this->model_review->get_slug_reviews($slug);

		$this->load->view('category/music_reviewpage',$data);
	}
}