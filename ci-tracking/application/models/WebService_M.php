<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class WebService_M extends CI_Model{

	
	public function __construct(){
		parent::__construct();
	}

	public function getDataBranch($kode){		
		$get = $this->db->get_where('checker', array('KODE_CABANG' => $kode));

		if($get->num_rows() == 1){
			foreach($get->result() as $row)
			{
				$data['CHECKER'] = $row->CHECKER;
				$data['VALIDATOR1'] = $row->VALIDATOR1;
				$data['VALIDATOR2'] = $row->VALIDATOR2;
			}
		}

		return $data;
	}

	
}