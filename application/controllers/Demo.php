<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
        //$this->load->model('Admin/Model_Admin','admin');
    }
    function index(){
        $this->vMachine();
    }

    function vMachine(){
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageDemo');
        $this->load->view('Home/template/PageFooter1');
    }
    function vDataCenter(){
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageDemovDataCenter.php');
        $this->load->view('Home/template/PageFooter1');
    }

}