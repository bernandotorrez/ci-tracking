<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home_C extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('Login_M');
		$this->load->model('Hq_M');
		$this->check_login();
		$this->cek_akses();
	}

	public function index(){
		
		$data['title'] = 'ER TRACKING - BAF';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/index',$data);
		
	}


	public function profil(){
		
		$data['title'] = 'Halaman Profil - ER TRACKING';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/profil',$data);
	}

	public function report(){
		$data['report'] = $this->getWSREPORT();
		$data['title'] = 'Halaman Report - ER TRACKING';
		$data['url'] = $this->uri->uri_string();
		$this->template->display('content/report',$data);
	}

	public function headquarter(){
		$cek = $this->cekhqbranch();
		

		if($cek =='Headquarter'){
		$id = $this->session->userdata('superUser');
		$data['title'] = 'Halaman Headquarter - ER TRACKING';
		$data['url'] = $this->uri->uri_string();
		$data['departement'] = $this->Hq_M->getDepartment();
		$data['tipeer'] = $this->Hq_M->getTipeer();
		$data['user'] = $id;
		$this->template->display('content/headquarter',$data);
	} else {
		redirect(base_url('Home/index'));
	}
	}

	public function branch(){
		$cek = $this->cekhqbranch();
		

		if($cek =='Cabang'){
		$id = $this->session->userdata('superUser');
		$data['title'] = 'Halaman Branch - ER TRACKING';
		$data['url'] = $this->uri->uri_string();
		$data['departement'] = $this->Hq_M->getDepartment();
		$data['tipeer'] = $this->Hq_M->getTipeer();
		$data['user'] = $id;
		$this->template->display('content/branch',$data);
	} else {
		redirect(base_url('Home/index'));
	}
	}

	public function cek_akses(){
        $where = array('ac' => $this->session->userdata('info'));
            $hak_akses = $this->Login_M->cek_akses("cek_akses",$where);
            $login = $this->session->userdata('cek');
            if($login=='Headquarter'){
            if($hak_akses->status == 'Ijinkan'){
            	$super_user_session = array(
                'superUser' => $hak_akses->is_super_user
                );
               $this->session->set_userdata($super_user_session);
            } else {
                redirect("error");
            }
        } else {

        }
    }

     public function check_login(){
        if(empty($this->session->userdata('login') )){
    redirect(base_url('login'));
	}
    }

    public function cekhqbranch(){
    	$cek = $this->session->userdata('cek');

    	return $cek;
    }

    public function getWSREPORT(){
       $url = 'http://172.16.1.225:5222/ws/com.baf.ws.ws_DataERPR/com_baf_ws_ws_DataERPR_Port'; 

        $post_string = 
            '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="http://localhost/com.baf.ws:ws_DataERPR">
   <soapenv:Header/>
   <soapenv:Body>
      <com:fsGetDataHQ/>
   </soapenv:Body>
</soapenv:Envelope>';

        $soap_do = curl_init();
        curl_setopt($soap_do, CURLOPT_URL, $url);
        curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 1000);
        curl_setopt($soap_do, CURLOPT_TIMEOUT, 1000);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_do, CURLOPT_POST, true);
        curl_setopt($soap_do, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: text/xml; charset=utf-8'
            ));
        $result    = curl_exec($soap_do);
        $err       = curl_error($soap_do);

        $replace   = array(
            "soapenv:",
            "ser-root:"
        );
        $clean_xml = str_ireplace($replace, '', $result);
        $xml       = simplexml_load_string($clean_xml);
        $data_wdsl = json_encode($xml->Body->fsGetDataHQResponse);     
     
        $Proses1   = json_decode($data_wdsl, TRUE);
        $Proses2   = json_encode($Proses1["requestGETdetail"]); 
        
        $WSDL      = json_decode($Proses2,TRUE);

         $PR_NUMBER = $WSDL['PR_NUMBER']; 
        $ER_NUMBER = $WSDL['ER_NUMBER']; 
       
        $PERIODE                   = substr($WSDL['PERIODE'],0,10);
        $TANGGAL_INCOMING          = substr($WSDL['TANGGAL_INCOMING'],0,10);
        $TANGGAL_PROSES_CHECKER    = substr($WSDL['TANGGAL_PROSES_CHECKER'],0,10);
        $TANGGAL_INCOMING_FINANCE  = substr($WSDL['TANGGAL_INCOMING_FINANCE'],0,10);
         $INSERT_DATE  = substr($WSDL['INSERT_DATE'],0,10);
         $APPROVER_DATE  = substr($WSDL['APPROVER_DATE'],0,10);
         $callback = array(
                   'status'     => 'success', 
                    'txt_prnumber'      => $WSDL['PR_NUMBER'], 
                     
                    'txt_ernumber'        => $WSDL['ER_NUMBER'],
                    'txt_validator1'      => $WSDL['VALIDATOR'],
                    'txt_validator2'      => $WSDL['VALIDATOR2'],
                    'txt_checker'      => $WSDL['CHECKER'],
                    'txt_kodecabang'      => $WSDL['KODECABANG'],
                    'txt_cabang'      => $WSDL['CABANG'], 
                     
                    'txt_tipeer'        => $WSDL['TIPE_ER'],
                    'txt_periode'      => $PERIODE,
                    'txt_ti'      => $TANGGAL_INCOMING,
                    'txt_tps'      => $TANGGAL_PROSES_CHECKER,
                    'txt_status'      => $WSDL['STATUS'],

                    'txt_remarks'        => $WSDL['TIPE_ER'],
                    'txt_tif'      => $TANGGAL_INCOMING_FINANCE,
                    'txt_active'      => $WSDL['ACTIVE'],
                    'txt_insertdate'      => $INSERT_DATE,
                    'txt_tipeerpr'      => $WSDL['TYPE_PR_ER_NUMBER'],

                    'txt_appdate'        => $APPROVER_DATE,
                    'txt_nameapp'      => $WSDL['NAME_OF_APPROVERD'],
                    'txt_slapr'      => $WSDL['SLA_PR'],
                    'txt_slapo'      => $WSDL['SLA_PO'],
                    'txt_slaerdate'      => $WSDL['SLA_ER_DATE'],

                     'txt_slakirim'        => $WSDL['SLA_KIRIM'],
                    'txt_slacabang'      => $WSDL['SLA_CABANG'],
                    'txt_acct'      => $WSDL['ACCT'],
                    'txt_slafin'      => $WSDL['SLA_FIN'],
                    'txt_slahq'      => $WSDL['SLA_HQ']
                    
                     

                );
return $WSDL;  
        // $PRDATE=$WSDL['pr_date'];
       
    }
   


}