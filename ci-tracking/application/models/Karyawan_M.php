<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Karyawan_M extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function insert($table,$data){
		$input = $this->db->insert($table, $data);

		return $input;
	}

	public function getKaryawan(){
		$get = $this->db->get('karyawan');

		return $get->result();
	}

	public function getPosisi(){
		$get = $this->db->get('posisi');

		return $get->result();
	}

	public function delete($id){
		$this->db->where('id_divisi', $id);
		$delete = $this->db->delete('divisi');

		return $delete;
	}

	public function editDivisi($id){
		$edit = $this->db->where('id_divisi', $id)->get('divisi');

		return $edit->result();
	}

	public function update($id, $data){
		
	$this->db->where($id);
	$update = $this->db->update('divisi', $data);

		return $update;
	}
}