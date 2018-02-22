<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewcart extends CI_Controller {

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
        
        if($this->cart->total_items() == 0){
            $this->load->view('Home/template/PageHeader');
            $this->load->view('Home/PageViewCartKosong');
            $this->load->view('Home/template/PageFooter1');            
        }else{

            $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
                if($logged_in){

                    $total = $this->cart->total();
                    $pajak10 = $total*10/100;
                    $data['ppn'] = $pajak10;
                    $data['grandtotal'] = $total + $pajak10;
                    $data['datacart'] = $this->cart->contents();
                    $this->load->view('Home/template/PageHeader');
                    $this->load->view('Home/PageViewCart',$data);
                    $this->load->view('Home/template/PageFooter1');
                }
                else{
                    $this->session->set_flashdata('msgcheckout', 
                        '<div class="alert alert-danger">
                            <h4>Maaf Anda Harus Login terlebih dahulu ..</h4>
                        </div>');
                        redirect('Home/Akun');
                }
        }
    
    }

    function hapuscartinview(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->uri->segment(3), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        redirect('Viewcart');
    }

    function bersihkan(){ //fungsi untuk menghapus item cart
        $this->cart->destroy();
        $this->session->set_flashdata('msgkeranjang', 
            '<div class="alert alert-danger">
                <h4>Keranjang Berhasil Dibersihkan ..</h4>
            </div>');
        redirect('Viewcart');
    }

}