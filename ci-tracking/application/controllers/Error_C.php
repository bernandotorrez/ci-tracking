<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

Class Error_C extends CI_Controller{

    public function __construct(){
        parent::__construct();
      
    }

    public function index(){
    $data['title'] = 'Anda Tidak Dapat Mengakses Aplikasi Ini';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/error',$data);
    }

}