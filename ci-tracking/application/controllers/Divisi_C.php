<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Divisi_C extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_M');
	}

	public function index(){
		$data['divisi'] = $this->Divisi_M->getDivisi();
		$this->load->view('Divisi_Pages/Index',$data);
		
	}

	public function create(){
		$table = 'divisi';
		$data = array('id_divisi' => $this->input->post('id'),
					'nama_divisi' => $this->input->post('nama_divisi')
			);
		
		$insert = $this->Divisi_M->insert($table, $data);
		

		if($insert){
			redirect('?sukses');
		} else {
			redirect('?gagal');
		}
	}

	public function edit($id){
		$data['edit'] = $this->Divisi_M->editDivisi($id);
		$this->load->view('Divisi_Pages/Edit',$data);
	}

	public function delete($id){
		$delete = $this->Divisi_M->delete($id);

		if($delete){
			echo "Hapus data berhasil";
		} else {
			echo "Hapus data gagal";
		}
	}

	public function update(){
		$id = array('id_divisi' => $this->input->post('id'));
		$data = array('nama_divisi' => $this->input->post('nama_divisi'));
				
		$update = $this->Divisi_M->update($id,$data);
		

		if($update){
			redirect('?sukses');
		} else {
			redirect('?gagal');
		}
		
	}
};