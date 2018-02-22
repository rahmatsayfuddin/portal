<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation','cart'));
        $this->load->helper(array('url','form','security'));
        //$this->load->model('Admin/Model_Admin','admin');
    }

    function index(){
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageHarga');
        $this->load->view('Home/template/PageFooter2');
    }

    function Addons1(){
        $data = array(
            'amount'           => $this->input->post('amount'),
            'duration'         => $this->input->post('duration'),
            'sata'             => $this->input->post('sata'),
            'sas'              => $this->input->post('sas'),
            'ip'               => $this->input->post('ip'),
            'firewal'          => $this->input->post('firewall'),
            'load_balancer'    => $this->input->post('load_balancer'),
            'vpn'              => $this->input->post('vpn'),
            'vlan'             => $this->input->post('vlan'),
            'os'               => $this->input->post('os'),
            'db'               => $this->input->post('db'),
            'totalall'         => $this->input->post('totalall')
         );
       //print_r($data);
       $this->cart->insert($data);
       echo $this->show_cart();
    }
}