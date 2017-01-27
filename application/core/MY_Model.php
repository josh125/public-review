<?php

class MY_Model extends CI_Model{

	protected $_table_name = '';
	protected $_primary_key = '';
	protected $_primary_filter = 'intval';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	public function __construct(){
		parent::__construct();

	}


	public function get($id = NULL, $order_by = NULL){


		if($id != NULL){
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
		}

		if(is_array($id)){
			foreach($id as $_key => $value){
				$this->db->where($_key, $value);
			}
		}

		$query = $this->db->get($this->_table_name);
		return $query->result_array();

	}

	
	public function save($data, $id = NULL){
		//insert
		if($id === NULL){
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();

		//update
		}else{

			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}
			return $id;



	}


}