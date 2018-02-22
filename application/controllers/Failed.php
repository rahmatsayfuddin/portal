<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Failed extends CI_Controller {

    var $API ="";

    function __construct() {
        parent::__construct();
        //$this->API="http://localhost/RestTelkomCloud";
        $this->API="http://10.210.20.55/api/rest";
    }
    function index(){
        //$data['ProdVMachine1'] = json_decode($this->curl->simple_get($this->API.'/PackageSmall'));
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageFailedSukses');
        $this->load->view('Home/template/PageFooter1');
    }
    
}