<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        //$this->API="http://localhost/RestTelkomCloud";
        $this->API="http://10.210.20.55/api/rest";
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
        //$this->load->model('Admin/Model_Admin','admin');
    }

    function index(){

        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageToko');
        $this->load->view('Home/template/PageFooter1');

    }

    function random($panjang_karakter){  
        //$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';  
        $karakter = '1234567890';
        $string = '';  
        for($i = 0; $i < $panjang_karakter; $i++) {  
            $pos = rand(0, strlen($karakter)-1);  
            $string .= $karakter{$pos};  
        }  
        return $string;  
    }

    function Komentar(){
        date_default_timezone_set('Asia/Jakarta');
        $delivDate = date('m/d/Y');
        $data = array(
            'COMMENT_ID'        =>  $this->input->post('prod_id').$this->random('5'),
            'COMMENT_PARENT_ID' =>  $this->input->post('prod_id').$this->random('5').'99',
            'PROD_ID'           =>  $this->input->post('prod_id'),
            'CUST_ID'           =>  $this->input->post('cust_id'),
            'COMMENT_DESC'      =>  $this->input->post('comment_desc'),
            'COMMENT_DATE'      =>  $delivDate,
        );
        print_r($data);
        $query = $this->curl->simple_post($this->API.'/Komentar', $data, array(CURLOPT_BUFFERSIZE => 10));
        
            $hasil = json_decode($query, true);   
            if($hasil['code']==200) {
                if ($data['PROD_ID']=='1') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductvMachine');    
                }else if ($data['PROD_ID']=='2') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductDataCenter');
                }else if ($data['PROD_ID']=='3') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductFreeHosting');
                }else if ($data['PROD_ID']=='4') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEmailZimbra');
                }else if ($data['PROD_ID']=='5') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEProject');
                }else if ($data['PROD_ID']=='6') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEOffice');
                }else if ($data['PROD_ID']=='7') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEKelurahan');
                }else if ($data['PROD_ID']=='8') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEPuskesmas');
                }else if ($data['PROD_ID']=='9') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductSiapOnline');
                }else{
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-success">
                        <h4>Selamat , Anda Berhasil Menginputkan Komentar</h4>
                    </div>');
                    redirect('Toko/ProductEAkademik');
                }                
            }else{
                if ($data['PROD_ID']=='1') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductvMachine');    
                }else if ($data['PROD_ID']=='2') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductDataCenter');
                }else if ($data['PROD_ID']=='3') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductFreeHosting');
                }else if ($data['PROD_ID']=='4') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEmailZimbra');
                }else if ($data['PROD_ID']=='5') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEProject');
                }else if ($data['PROD_ID']=='6') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEOffice');
                }else if ($data['PROD_ID']=='7') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEKelurahan');
                }else if ($data['PROD_ID']=='8') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEPuskesmas');
                }else if ($data['PROD_ID']=='9') {
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductSiapOnline');
                }else{
                    $this->session->set_flashdata('msgkomentar',
                    '<div class="alert alert-danger">
                        <h4>Maaf, Anda Belum Berhasil Menginputkan Komentar.</h4>
                    </div>');
                    redirect('Toko/ProductEAkademik');
                }
            }
    }

    function Addons(){
        //$id = $_GET;
        $id = $this->input->get('PACK_ID');
        //echo $id;
        $data['Package'] = json_decode($this->curl->simple_get($this->API.'/Package?PACK_ID='.$id.''));
        
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageAddons',$data);
        $this->load->view('Home/template/PageFooter3');
    }

    function ProductvMachine(){
        $data['ProdVMachine1'] = json_decode($this->curl->simple_get($this->API.'/PackageSmall'));
        $data['ProdVMachine2'] = json_decode($this->curl->simple_get($this->API.'/PackageMedium'));
        $data['ProdVMachine3'] = json_decode($this->curl->simple_get($this->API.'/PackageLarge'));
        $data['ProdVMachine4'] = json_decode($this->curl->simple_get($this->API.'/PackageExtraLarge'));
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=1'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PagevMachine',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductDataCenter(){
        $data['ProdDataCenter5'] = json_decode($this->curl->simple_get($this->API.'/PackageDataCenter?PACK_GROUP=5'));
        $data['ProdDataCenter6'] = json_decode($this->curl->simple_get($this->API.'/PackageDataCenter?PACK_GROUP=6'));
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=2'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageDataCenter',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductFreeHosting(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=3'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageFreeHosting',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEmailZimbra(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=4'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEmailZimbra',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEProject(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=5'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEProject',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEOffice(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=6'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEOffice',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEKelurahan(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=7'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEKelurahan',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEPuskesmas(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=8'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEPuskesmas',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductSiapOnline(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=9'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageSiapOnline',$data);
        $this->load->view('Home/template/PageFooter1');        
    }

    function ProductEAkademik(){
        $data['Komentar'] = json_decode($this->curl->simple_get($this->API.'/Komentar?PROD_ID=10'));
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='customers');
        if($logged_in){
        $data['Customer'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        }
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageEAkademik',$data);
        $this->load->view('Home/template/PageFooter1');        
    }
}