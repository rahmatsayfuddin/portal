<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finnet extends CI_Controller {

    var $API ="";
    //var $URL_ENDPOINT ="";
    
    function __construct() {
        parent::__construct();
        $this->API = "http://10.210.20.55/api/rest";
        
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
        //$this->load->model('Admin/Model_Admin','admin');
    }

    function index(){

        $method     = $this->input->post('method');
        $customer   = $this->input->post('customer');
        $product    = $this->input->post('product');
        $amount     = $this->input->post('amount');
        
        // echo $method;
        // echo "<br>";
        // echo $customer;
        // echo "<br>";
        // echo $product;
        // echo "<br>";
        // echo $amount;

        if($method = "1") {
            $tipe = "cc";
            $is_recur = "0";
        } else {
            $tipe = "ccrecur"; 
            $is_recur = "1";
        }
        //echo $tipe;
            
        $URL_ENDPOINT = "http://10.210.20.55/apiportalcloud/v1/invoice/create/".$customer."/".
            $product."/".$amount."/1/PREP/".$is_recur."?key=1234";
        echo $URL_ENDPOINT; 
        echo "<br>";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL_ENDPOINT);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec ($ch); 
        $result = json_decode($result);
        curl_close ($ch); 
        
        print_r($result);
        echo "<br>";
        echo $URL_ENDPOINT;
        //echo $result->Data->INVOICE_NO; 
        //echo "<br>";
        
        // GET URL FINNET
        $URL_ENDPOINT = "http://10.210.20.55/apiportalcloud/v1/finpay/".$tipe."/PORTALCLOUD/".$result->Data->INVOICE_NO."?key=1234";
        echo "<br>";
        echo $URL_ENDPOINT;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL_ENDPOINT);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec ($ch); 
        $result = json_decode($result);
        curl_close ($ch); 
        
        //var_dump($result);
        //print_r($result);  
        //echo $result->redirect_url;
        
        header("location:".$result->redirect_url); 

    }

}