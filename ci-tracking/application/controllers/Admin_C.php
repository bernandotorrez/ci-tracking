<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_C extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->check_login();
		$this->load->model('Admin_M');
		}
	

	public function index(){
		$data['title'] = 'Halaman Login Admin ER TRACKING - BAF';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/index',$data);
		
	}

	public function akses(){
		$data['title'] = 'Halaman Admin ER TRACKING - BAF';
		$data['url'] = $this->uri->uri_string();
		
			$data['userakses'] = $this->Admin_M->getDataAll();
		
		
		$this->template->display('content/akses',$data);
		
	}

	public function edit($id){
		$data['title'] = 'Halaman Admin ER TRACKING - BAF';
		$data['url'] = $this->uri->uri_string();
		
			$data['userakses'] = $this->Admin_M->getData($id);
		
		
		$this->template->display('content/edit',$data);
		
	}

	public function delete($id){
		$delete = $this->Admin_M->Delete($id);

		if($delete){
			redirect(base_url('Admin/akses?deletesukses'));
		} else {
			redirect(base_url('Admin/akses?deletegagal'));
		}
	}

	public function update(){
		$data = array('ac' => $this->input->post('domain'),
						'status' => $this->input->post('status'),
						'is_super_user' => $this->input->post('cost'));
		
		$update = $this->Admin_M->Update($data, $data['ac']);

		if($update){
			redirect(base_url('Admin/akses?updatesukses'));
		} else {
			redirect(base_url('Admin/akses?updategagal'));
		}
		
		
	}

	public function insert(){
		$data = array(
        'ac' => $this->input->post('domain'),
        'status' => $this->input->post('status'),
        'is_super_user' => $this->input->post('cost')
         );
    $data = $this->Admin_M->Insert('cek_akses', $data);
    redirect(base_url('Admin/akses?sukses'),'refresh');
	}

	public function check_login(){
        if(empty($this->session->userdata('login_admin')) AND empty($this->session->userdata('login'))) {	
    redirect(base_url('Home/index'));
	} elseif(empty($this->session->userdata('login_admin')) AND !empty($this->session->userdata('login'))) {
redirect(base_url('Home/index'));
	}
    }

}