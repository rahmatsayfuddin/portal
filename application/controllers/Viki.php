<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viki extends CI_Controller {

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
        print_r($_SESSION);
        echo "<br>";
        print_r($this->session);
        echo "<br>";
        

        if ($logged_in) {
            echo "awdas";
        }else{
            echo "wkwkwk";
        }
    }
}