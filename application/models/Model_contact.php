<?php

class Model_contact extends CI_Model{
	

	public function add_contact_message($data_entry)
	{
		$this->db->insert('contact_us', $data_entry);
	}
}