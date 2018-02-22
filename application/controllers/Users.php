<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest/";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
    }

	
    function index(){
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
            if($logged_in){
                $data['users'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_ID='.$this->session->userdata('idcust').''));
                $data['invoice'] = json_decode($this->curl->simple_get($this->API.'/Invoice?CUST_ID='.$this->session->userdata('idcust').''));
                $this->load->view('Home/template/PageHeader');
                $this->load->view('Dashboard_users/PageDashboardUsers',$data);
                $this->load->view('Home/template/PageFooter1');
            }else{
                redirect('Home');
            }
    }

}