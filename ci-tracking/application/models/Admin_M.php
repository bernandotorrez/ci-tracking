<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_M extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

    public function GetDataAll(){
        return $this->db->get('cek_akses'); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        
    }
 
     public function GetData($id){
       return $this->db->get_where('cek_akses', array('ac' => $id));

    }

    public function getDataEdit($id){
    	$get = $this->db->get_where('cek_akses', array('ac' => $id));

		if($get->num_rows() == 1){
			foreach($get->result() as $row)
			{
				$data['ac'] = $row->ac;
				$data['status'] = $row->status;
				$data['ijinkan'] = $row->ijinkan;
			}
		}

		return $data;
	}
    


    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($id, $where){
      $this->db->where('ac',$where);
      $this->db->update('cek_akses', $id);

      return true;
    }
 
    public function Delete($id){
     $this->db->where('ac', $id);
	 $this->db->delete('cek_akses');

      return true;
    }
}
?>