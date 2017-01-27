<?php

class Model_review extends MY_Model {

	protected $_table_name = 'item_reviews';
	protected $_primary_key = 'item_review_id';
	protected $_primary_filter = 'intval';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	public function add_category_item($data_entry){
		$this->db->insert('main_category_item', $data_entry);
	}

	public function addhotel_review($data_entry){
		$this->db->insert('other_category_item', $data_entry);
	}

	public function addresto_review($data_entry){
		$this->db->insert('resto_category_item', $data_entry);
	}

	public function addattract_review($data_entry){
		$this->db->insert('attract_category_item', $data_entry);
	}

	public function addbiz_review($data_entry){
		$this->db->insert('biz_category_item', $data_entry);
	}

	public function addweb_review($data_entry){
		$this->db->insert('web_category_item', $data_entry);
	}

	public function addpeople_review($data_entry){
		$this->db->insert('people_category_item', $data_entry);
	}

	public function addmusic_review($data_entry){
		$this->db->insert('music_category_item', $data_entry);
	}

	public function addmovie_review($data_entry){
		$this->db->insert('movie_category_item', $data_entry);
	}




	public function get_review_all(){
		$this->db->select('*')
				 ->from('item_reviews r')
				 ->order_by('date_review', 'DESC')
				 ->join('main_category_item s', 's.main_category_item_id = r.main_category_item_id','left')
				 ->join('main_category m', 'm.main_category_id = s.main_category_id','left')
				 ->join('users u', 'u.user_id = r.user_id', 'left');

		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return array();
		}		 

	}

	public function pep_review($r_id,$pep_id){
		 $this->db->where('review_id', $r_id)
		 		  ->where('a.pep_id', $pep_id)	
				  ->from('reviews a')
				  ->join('people p', 'p.pep_id = a.pep_id', 'left')
				  ->join('users u', 'u.user_id = a.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}			
	}

	public function place_review($r_id,$rev_id){
		 $this->db->where('review_id', $r_id)
		 		  ->where('r.place_id', $rev_id)	
				  ->from('reviews r')
				  ->join('places p', 'p.place_id = r.place_id', 'left')
				  ->join('users u', 'u.user_id = r.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}			
	}

	public function biz_review($r_id,$biz_id){
 		 $this->db->where('review_id', $r_id)
		 		  ->where('r.biz_id', $biz_id)	
				  ->from('reviews r')
				  ->join('review_biz b', 'b.biz_id = r.biz_id', 'left')
				  ->join('users u', 'u.user_id = r.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}			
	}

	public function web_review($r_id,$web_id){
		 $this->db->where('review_id', $r_id)
		 		  ->where('r.web_id', $web_id)	
				  ->from('reviews r')
				  ->join('website a', 'a.web_id = r.web_id', 'left')
				  ->join('users u', 'u.user_id = r.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}			
	}

	public function thing_review($r_id,$th_id){
		 $this->db->where('review_id', $r_id)
		 		  ->where('r.th_id', $th_id)	
				  ->from('reviews r')
				  ->join('things a', 'a.th_id = r.th_id', 'left')
				  ->join('users u', 'u.user_id = r.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}			
	}

	public function get_slug($slug = FALSE){

		if($slug === FALSE){

			$this->db->where('r.main_category_item_id', $id)
				 ->from('item_reviews r')
				 ->join('users u','u.user_id = r.user_id')	
				 ->order_by('date_review', 'DESC');
		$query = $this->db->get();
		return $query->result();

		}

		$query = $this->db->where('slug',$slug)
			     ->from('main_category_item m')	
			     ->join('main_category c','c.main_category_id = m.main_category_id', 'left')
	 	 		 ->get();	
		return $query->result();
	}

	public function get_slug_reviews($slug = FALSE){

		if($slug === FALSE){

			$query = $this->db->where('slug',$slug)
				     ->from('item_reviews m')	
				     ->join('main_category_item c','c.main_category_item_id = m.item_reviews', 'left')
				     ->join('main_category r','r.main_category_id = c.main_category_id', 'left')
		 	 		 ->get();	
			return $query->result_array();
		}

		$query = $this->db->where('slug',$slug)
			     ->from('main_category_item m')	
			     ->join('item_reviews c','c.main_category_item_id = m.main_category_item_id', 'left')
			     ->join('users u','u.user_id = c.user_id', 'left')
	 	 		 ->get();	
		return $query->result();

	}

	public function record_count($slug) {
             
      $query = $this->db->where('review_slug', $slug)
      					->get('item_reviews');
      return $query->num_rows();					

    }

    public function fetch($limit, $start, $slug) {

		
		$query = $this->db->where('review_slug',$slug)
	 					  ->from('item_reviews m')
	 					  ->order_by('date_review', 'DESC')
			    		  ->join('users u','u.user_id = m.user_id', 'left')
	 					  ->limit($limit, $start)
		 	 		      ->get();	

		return $query->result();

	}

	public function get_profile($id){
		$query = $this->db->where('u.user_id', $id)
						  ->from('users u')
						  ->limit(1)
						  ->get();

		return $query->result();				  
	}

	public function profile_reviews($id){
		$this->db->where('u.user_id', $id)
						  ->from('users u')
						  ->order_by('date', 'DESC')
						  ->join('reviews r', 'r.user_id = u.user_id', 'left');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return array();
		}	

	}


	public function search_main_item($match){
		$this->db->like('item_name', $match)
				 ->from('main_category_item h')
				 ->join('main_category i', 'i.main_category_id = h.main_category_id');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return FALSE;		
		}	  	
	}

	

	public function get_addreview_resto($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id', '7');
		$query = $this->db->get('main_category_item');
		return $query->result();
	}

	public function get_addreview_hotel($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id','6');	
		$query = $this->db->get('main_category_item');
		return $query->result();		 	
	}

	public function get_addreview_attraction($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id','8');
		$query = $this->db->get('main_category_item');
		return $query->result();		 	
	}

	public function get_addreview_website($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id', '4');
		$query = $this->db->get('main_category_item');
		return $query->result();		 
	}

	public function get_addreview_biz($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id', '3');
		$query = $this->db->get('main_category_item');
		return $query->result();		 
	}

	public function get_addreview_people($id){
		$this->db->where('main_category_item_id', $id)
				 ->where('main_category_id', '1');
		$query = $this->db->get('main_category_item');
		return $query->result();		 
	}

	public function get_addreview_music($id){
	$this->db->where('main_category_item_id', $id)
			 ->where('main_category_id', '10');
	$query = $this->db->get('main_category_item');
	return $query->result();	

	}

	public function get_addreview_movie($id){
	$this->db->where('main_category_item_id', $id)
			 ->where('main_category_id', '9');
	$query = $this->db->get('main_category_item');
	return $query->result();	

	}

	public function getreviews($id){

	$this->db->where('r.main_category_item_id', $id)
			 ->from('item_reviews r')
			 ->join('users u','u.user_id = r.user_id')	
			 ->order_by('date_review', 'DESC')
			 ->limit(3);	
	$query = $this->db->get();
	return $query->result();

	}

}