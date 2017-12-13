<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

Class NotFound_C extends CI_Controller{

    public function __construct(){
        parent::__construct();
      
    }

    public function index(){
    		$data['title'] = 'Halaman Tidak Dapat Ditemukan';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/404',$data);
    }

}