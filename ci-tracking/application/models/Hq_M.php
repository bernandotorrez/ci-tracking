<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Hq_M extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	
	public function getDepartment(){
		$this->db->from('department_list');
		$this->db->order_by('Title', 'asc');
		$query = $this->db->get();

		return $query->result();

	}

	public function getTipeer(){
		$this->db->from('tipe_er_list');
		$this->db->order_by('TIPE_ER', 'asc');
		$query = $this->db->get();

		return $query->result();

	}

}


