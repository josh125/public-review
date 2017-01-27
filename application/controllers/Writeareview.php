<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writeareview extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('model_review');

		parse_str(substr($_SERVER['REQUEST_URI'],strpos($_SERVER['REQUEST_URI'],'?')+1,strlen($_SERVER['REQUEST_URI'])-strpos($_SERVER['REQUEST_URI'],'?')),$_GET);

	}

	public function index()
	{
		$this->load->view('writeareview');
	}


	public function add_category()
	{

		$user_id = $this->session->userdata('id');
		$slug = url_title($this->input->post('name'),'dash',TRUE);
		$review  = $this->input->post('review');
		$title  = $this->input->post('review_title');
		$rate  = $this->input->post('overall_rate');

		if($user_id != NULL){

			$this->form_validation->set_rules('name', 'Name', 'required|trim');
			$this->form_validation->set_rules('city', 'City', 'required|trim');
			$this->form_validation->set_rules('address', 'Address', 'required|trim');

			if($this->form_validation->run() == FALSE){
				$this->load->view('add_category');

			}else{

			//loading upload

				$config['upload_path'] 			= './assets/upload/';
				$config['allowed_types'] 		= 'jpg|png|jpeg';
				$config['overwrite']			= TRUE;
				$config['max_size']				= 204800;
				$config['max_width']			= 2000;
				$config['max_height']			= 2000;
				$this->load->library('upload',$config);

				if( ! $this->upload->do_upload())
				{
					$this->load->view('add_category');

				}else{

					$upload_image = $this->upload->data();

					$data_entry = array(
						'country' => $this->input->post('country'),
						'item_name' => $this->input->post('name'),
						'main_category_id' => $this->input->post('category_id'),
						'city' => $this->input->post('city'),
						'address' => $this->input->post('address'),
						'phone_no' => $this->input->post('phone_no'),
						'slug' => $slug,
						'category_info' => $this->input->post('category_info'),
						'main_category_id' => $this->input->post('category_id'),
						'website_url' => $this->input->post('website_url'),
						'category_img' => $upload_image['file_name']
						);

					$this->model_review->add_category_item($data_entry);
					$id = $this->db->insert_id();

					$data = array(

						'main_category_item_id' => $id,
						'title_review' => $this->input->post('review_title'),
						'review' => $this->input->post('review'),
						'review_rate' => $this->input->post('overall_rate'),
						'user_id' => $user_id,
						'review-slug' => $slug
						);

					$this->model_review->save($data);
					$r_id = $this->db->insert_id();
					$this->session->set_flashdata('message','Successfully Add');
					redirect('writeareview/add_category');
				}
			}

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}

	public function addhotel_review()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$review = $this->input->post('review');
		$slug = $this->input->post('slug');

		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'review_slug' => $slug,
				'user_id' => $user_id
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			// $data_entry = array(
			// 	'sort_trip' => $this->input->post('trip'),
			// 	'date_travel' => $this->input->post('travel_date'),
			// 	'hotel_view' => $this->input->post('room_great_views'),
			// 	'hotel_pool' => $this->input->post('have_indoor_pools'),
			// 	'budget_hotel' => $this->input->post('a_budget_hotels'),
			// 	'luxury_hotel' => $this->input->post('a_luxury_hotels'),
			// 	'romantic_hotel' => $this->input->post('a_romantic_hotels'),
			// 	'trendy_hotel' => $this->input->post('a_trendy_hotels'),
			// 	'hotel_service' => $this->input->post('service_rate'),
			// 	'hotel_sleep' => $this->input->post('sleep_quality_rate'),
			// 	'hotel_rooms' => $this->input->post('rooms_rate'),
			// 	'hotel_nearby' => $this->input->post('neighbourhood_knowns'),
			// 	'hotel_room_wifi' => $this->input->post('indoor_wifis'),
			// 	'hotel_tip' => $this->input->post('traveller_tip_good_room'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// );

			// $this->model_review->addhotel_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{

			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}


	public function add_restaurant()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$slug = $this->input->post('slug');

		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id,
				'review_slug' => $slug
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			// $data_entry = array(
			// 	'sort_trip' => $this->input->post('sort_of_visits'),
			// 	'when_eat' => $this->input->post('here_for'),
			// 	'date_visit' => $this->input->post('when_visit'),
			// 	'resto_breakfast' => $this->input->post('good_for_breakfasts'),
			// 	'resto_brunch' => $this->input->post('good_for_brunchs'),
			// 	'resto_friendly' => $this->input->post('is_family_friendly'),
			// 	'resto_take_out' => $this->input->post('take_out_or_food_to_gos'),
			// 	'resto_wifi' => $this->input->post('offer_free_wifis'),
			// 	'resto_delivery' => $this->input->post('offer_deliveries'),
			// 	'resto_service' => $this->input->post('service_rate'),
			// 	'resto_food' => $this->input->post('food_rate'),
			// 	'resto_value' => $this->input->post('value_rate'),
			// 	'resto_expense' => $this->input->post('how_expensives'),
			// 	'resto_dishes' => $this->input->post('dishes_to_recommend'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// );

			// $this->model_review->addresto_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{

			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}

	public function add_attraction()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$slug = $this->input->post('slug');


		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id,
				'review_slug' => $slug
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			// $data_entry = array(
			// 	'sort_trip' => $this->input->post('sort_of_visits'),
			// 	'date_visit' => $this->input->post('when_visit'),
			// 	'recommend_visit' => $this->input->post('length_of_visits'),
			// 	'public_free' => $this->input->post('free_to_publics'),
			// 	'gratuity' => $this->input->post('gratuity_suggesteds'),
			// 	'rainy_activity' => $this->input->post('good_rainy_day_activities'),
			// 	'food_available' => $this->input->post('food_availables'),
			// 	'car_required' => $this->input->post('car_requireds'),
			// 	'public_transpo' => $this->input->post('access_public_transports'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// );

			// $this->model_review->addattract_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{

			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}	

	}

	public function add_websitereview()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$slug = $this->input->post('slug');

		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id,
				'review_slug' => $slug
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			// $data_entry = array(
			// 	'sort_of_website' => $this->input->post('sort_of_visit'),
			// 	'useful_site' => $this->input->post('good_rainy_day_activity'),
			// 	'site_visit' => $this->input->post('food_available'),
			// 	'site_harmful' => $this->input->post('access_public_transport'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// );

			// $this->model_review->addweb_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{

			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}

	public function add_bizreview()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$slug = $this->input->post('slug');

		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id,
				'review_slug' => $slug
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

		
			// $data_entry = array(

			// 	'sort_biz' => $this->input->post('sort_of_visits'),
			// 	'biz_legit' => $this->input->post('good_for_brunch'),
			// 	'biz_service' => $this->input->post('good_for_breakfast'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// );


			// $this->model_review->addbiz_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}

	public function add_peoplereview()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');
		$slug = $this->input->post('slug');

		if($user_id != NULL){

			$data = array(
				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id,
				'review_slug' => $slug
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			// $data_entry = array(

			// 	'profession' => $this->input->post('prof'),
			// 	'public_known' => $this->input->post('free_to_publics'),
			// 	'people_reputation' => $this->input->post('gratuity_suggesteds'),
			// 	'user_id' => $user_id,
			// 	'main_category_item_id' => $category_id
			// 	);

			// $this->model_review->addpeople_review($data_entry);
			// $id = $this->db->insert_id();
			$this->session->set_flashdata('message','You Sucessfully Add a Review');
			redirect('writeareview');

		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}


	public function addmusic_review()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');

		if($user_id != NULL){

			$data = array(

				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			$data_entry = array(

				'sort_music' => $this->input->post('sort_of_visits'),
				'genre_info' => $this->input->post('genre'),
				'music_public' => $this->input->post('free_to_publics'),
				'music_listen' => $this->input->post('gratuity_suggesteds'),
				'user_id' => $user_id,
				'main_category_item_id' => $category_id
				);

			$this->model_review->addmusic_review($data_entry);
			$id = $this->db->insert_id();
			redirect('writeareview');


		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}

	}

	public function addmovie_review()
	{
		$user_id = $this->session->userdata('id');
		$category_id = $this->input->post('main_category_item_id');

		if($user_id != NULL){

			$data = array(

				'review_rate' => $this->input->post('overall_rate'),
				'title_review' => $this->input->post('review_title'),
				'review' => $this->input->post('review'),
				'main_category_item_id' => $category_id,
				'user_id' => $user_id
				);

			$this->model_review->save($data);
			$r_id = $this->db->insert_id();

			$data_entry = array(

				'sort_movie' => $this->input->post('sort_of_visits'),
				'movie_good' => $this->input->post('free_to_publics'),
				'movie_rated' => $this->input->post('gratuity_suggesteds'),
				'user_id' => $user_id,
				'main_category_item_id' => $category_id
				);

			$this->model_review->addmovie_review($data_entry);
			$id = $this->db->insert_id();
			redirect('writeareview');



		}else{
			$this->session->set_flashdata('error', 'You must Log in order to post a review.');
			redirect('login');
		}
	}


	

	public function hotel()
	{
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_hotel($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_hotel',$data);
		
	}     

	public function resto()
	{	
		$this->load->library('encrypt');
		$this->load->helper('text');


		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_resto($id);
		$data['reviews'] = $this->model_review->getreviews($id);
	
		$this->load->view('add_reviews/addreview_restaurant',$data);

	}    

	public function attraction()
	{			
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_attraction($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_attraction',$data);
	}  

	public function web()
	{
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_website($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_website',$data);
	}

	public function biz()
	{
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_biz($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_biz',$data);
	}

	public function people()
	{
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_people($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_people',$data);
	}

	public function music(){
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_music($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_music',$data);
	}

	public function movie()
	{
		$this->load->library('encrypt');
		$this->load->helper('text');

		$dec_id = $this->uri->segment(3);

		$dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $dec_id);
		$id = $this->encrypt->decode($dec);

		$data['addreview'] = $this->model_review->get_addreview_movie($id);
		$data['reviews'] = $this->model_review->getreviews($id);

		$this->load->view('add_reviews/addreview_movie',$data);
	}


	public function sample_search_design() 
	{  
		$this->load->library('encrypt');
		$this->load->library('pagination');



		$match = $_GET['find'];
		$data['results'] = $this->model_review->search_main_item($match);

		if($data['results'] == TRUE){

			$config['base_url'] = base_url(). 'writeareview/sample_search_design .$match';
			$config['total_rows'] = 50;
			$config['per_page'] = 5;
			$config['num_links'] = 2;
			$config["uri_segment"] = 2;
			$config['enable_query_strings'] = TRUE;
			$config['page_query_string'] = TRUE;
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

			$this->load->view("search_result_view",$data);

		}else{
			$this->load->view("search_results");

		}

	}
}