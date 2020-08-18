<?php
class Contact_model extends CI_Model
{
	private $ci;

	public function __construct()
	{
		parent::__construct();

		$this->ci = &get_instance();

	}

	public function insert($data){
		//print_r($data);

		$this->db->insert('messages', $data);

		return true;
	}
}
