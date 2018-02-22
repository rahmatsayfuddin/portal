<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
        $this->load->model('Home/Model_home','Home');
    }

    function index(){
            //print_r($_SESSION);
            $data['title'] = 'Login';
            $this->load->view('Home/template/PageHeader');
            $this->load->view('Home/PageHome',$data);
            $this->load->view('Home/template/PageFooter1');
                
    }

    function Akun(){
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageLoginRegister');
        $this->load->view('Home/template/PageFooter1');
    }
    
}