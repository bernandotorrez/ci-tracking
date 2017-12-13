<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_M extends CI_Model{

	
	public function __construct(){
		parent::__construct();
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function superUser($id){		
		$get = $this->db->get_where('cek_akses', array('ac' => $id));

		if($get->num_rows() == 1){
			foreach($get->result() as $row)
			{
				$data['user'] = $row->is_super_user;
				
			}
		}

		return $data;
	}

	public function cek_akses($table,$where){		
	 	$this->db->get_where($table,$where);
	 	

	 	foreach($this->db->get_where($table,$where)->result() as $data){

	 	}

	 	return $data;
	}
}