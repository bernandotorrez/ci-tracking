<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_C extends CI_Controller{

    public function __construct(){
        parent::__construct();
       
        $this->load->model('Login_M');
        $this->load->library('ldap');
        
        
    }

    public function index(){
        $data['user'] = $this->ldap->check();
        $data['title'] = 'Halaman Login - ER TRACKING';
        $this->load->view('login',$data);
 
        }

    public function admin(){
        $data['title'] = 'Halaman Login Admin - ER TRACKING';
        $this->load->view('login_admin',$data);
 
        }
    
    
    public function aksi_login_admin(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Login_M->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'login_admin' => "true"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
            redirect("login/admin?gagal");
        }
    }
 
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function ldap_login(){
        $id = $this->input->post('username');

        $cek = $this->ldap->ldap_login($id);

        if($cek>0){
            $data_session = array(
                'info' => $_SESSION['info'],
                'cek' => $_SESSION['cek'],
                'mail' => $_SESSION['mail'],
                'ac' => $_SESSION['ac'],
                'dn' => $_SESSION['dn'],
                'dname' => $_SESSION['dname'],
                'gn' => $_SESSION['gn'],
                'date' => $_SESSION['date'],
                'login' => 'true'
                );
            $this->session->set_userdata($data_session);
            redirect("Home/index");
        } else {
            redirect("login?gagal");
        }

    }

   

}