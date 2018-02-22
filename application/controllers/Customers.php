<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest/";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation','encrypt'));
        $this->load->helper(array('url','form','security'));
    }

    function index(){
        
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Dashboard_users/PageDashboardUsers');
        $this->load->view('Home/template/PageFooter1');
    }

    function register(){
    // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){
            echo "<script>alert('Lengkapi Data Anda dengan Benar');history.go(-1);</script>";    
        }else{

            $jk = $this->input->post('gender',TRUE);
            if($jk == '1'){
                $gambar = "men.png";
            }else{
                $gambar = "woman.png";
            }

            date_default_timezone_set('Asia/Jakarta');
            $data = array(
                'CUST_ID'       =>  $this->random('9'),
                'CUST_NAME'     =>  $this->input->post('nama',TRUE),
                'CUST_EMAIL'    =>  $this->input->post('email',TRUE),
                'CUST_PHONE'    =>  $this->input->post('no_tlpn',TRUE),
                'CUST_PICT'     =>  $gambar,
                'STR_PASSWORD'  =>  md5($this->input->post('password',TRUE)),
                'GENDER'        =>  $this->input->post('gender',TRUE),
                'IS_ACTIVE'     =>  '0'
            );
                
                $query = $this->curl->simple_post($this->API.'/Registercustomer', $data, array(CURLOPT_BUFFERSIZE => 10));
                $hasil = json_decode($query, true);
                
                if($hasil['code']==200) {
                    $kirimemail = $this->kirim_notif_register($data['CUST_ID'],$data['CUST_EMAIL']);
                    //print_r($kirimemail);

                    if ($kirimemail = "1") {
                        $this->session->set_flashdata('msgdaftar', 
                        '<div class="alert alert-success">
                            <h4>Berhasil Mendaftar Silahkan Cek Email Anda</h4>
                        </div>');
                        redirect('Home/Akun');    
                    }else{
                        $this->session->set_flashdata('msgdaftar', 
                        '<div class="alert alert-warning">
                            <h4>Maaf Email Belum Terkirim ..</h4>
                        </div>');
                        redirect('Home/Akun');
                    }   
                    
                }elseif ($hasil['code']==400) {
                    $this->session->set_flashdata('msgdaftar', 
                    '<div class="alert alert-danger">
                        <h4>Maaf ,Email User Sudah Terdaftar</h4>
                    </div>');    
                    redirect('Home/Akun');
                } 
                else {
                    $this->session->set_flashdata('msgdaftar', 
                    '<div class="alert alert-danger">
                        <h4>Maaf Anda Gagal Mendaftar</h4>
                    </div>');    
                    redirect('Home/Akun');
                }
                
            }
    }

    function login(){
        
            // set validation rules
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE){
                echo "<script>alert('Lengkapi Data Anda dengan Benar');history.go(-1);</script>";
                
            }else{
                $data = array(
                    'CUST_EMAIL'   => $this->input->post('email',TRUE),
                    'STR_PASSWORD' => md5($this->input->post('password',TRUE)),
                );
                $query = $this->curl->simple_post($this->API.'/Logincustomer', $data, array(CURLOPT_BUFFERSIZE => 10));
                $hasil = json_decode($query, true);
                
                if($hasil['code']==200) {

                        $data_users = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$data['CUST_EMAIL'].''));
                        foreach ($data_users as $key) {
                            $email = $key->CUST_EMAIL;
                            $name = $key->CUST_NAME;
                            $idcust = $key->CUST_ID;
                        }
                        
                        $sess_data = array(
                            'status' => 'login',
                            'level'  => 'customers',
                            'idcust' => $idcust,
                            'email'  => $email,
                            'name'   => $name
                        );
                        
                        $this->session->set_userdata($sess_data);
                        //$this->update_last_login($row->users_id);
                        redirect('Home');
                        
                }elseif ($hasil['code']==400) {
                    $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Maaf, User Anda Belum Aktif !</h4>
                    </div>');    
                    redirect('Home/Akun');   
                }else {
                     $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Maaf Anda Gagal login </h4>
                    </div>');    
                    redirect('Home/Akun');
                }

            }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Home');
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

    function kirim_notif_register($iduser,$email){

        $string = base64_encode($iduser);
        $code11 = str_rot13($string);
        $API_KEY = "1234";
        $file_template = "temp/email_register.html";   
        // Opsi 1: cross domain ; Opsi 2: upload di local folder 
        // Ditentukan oleh hasil logic pengambilan informasi booking 
        $vars = array(

            "CUST_EMAIL" => $email,
            "LINK" => preg_replace("/,*$/", '', strtr($code11, '+/=', '-_,')),
        );
        $strvars = json_encode($vars); 
        $url_writer = "http://10.210.20.54/web/ota/mail/contentwriterhtml/".$file_template."/".urlencode($strvars)."?key=".$API_KEY;
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,$url_writer);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
        $out = curl_exec($ch);
        curl_close($ch);
        $file_name = json_decode($out);
        $file_name = $file_name[0];

        // Parameter (urut): 1. Email pengirim, 2. Nama Pengirim, 3. Email tujuan, 4. Subject email, 5. Nama file content yg dikirim (dari hasil API sebelumnya)
        $from       = urlencode("fiki.robby@sigma.co.id");
        $from_alias = urlencode("Portal Telkom Cloud");
        $to         = urlencode($email);
        $subject    = urlencode("Pengaktifan User Telkom Cloud");
        $url_sender = "http://10.210.20.54/web/ota/mail/notifhtml/".$from."/".$from_alias."/".$to."/".$subject."/".$file_name."?key=".$API_KEY;
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,$url_sender);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
        $out = curl_exec($ch);
        curl_close($ch);

        return $out;
        
    }

    public function verify($code){

        $iduser = base64_decode(str_rot13($code));
        $data = array('CUST_ID' => $iduser );
        $insert =  $this->curl->simple_post($this->API.'/Cekusers', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        $hasil = json_decode($insert, true);
        
        if($hasil['code']==200) {
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success">
                <h4>Selamat User Anda Telah Aktif ..</h4>
            </div>');    
            redirect('Home/Akun');
        }else if ($hasil['code']==404) {
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-warning">
                <h4>Maaf, User Anda Gagal Diaktifkan !</h4>
            </div>');    
            redirect('Home/Akun');
        }else{
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-danger">
                <h4>Maaf, User Anda Tidak Ada !</h4>
            </div>');    
            redirect('Home/Akun');
        }
    }

    function lupapass(){
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/PageLupaPass');
        $this->load->view('Home/template/PageFooter1');
    }

    function forgotpass(){
        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msglupapass', 
            '<div class="alert alert-warning">
                <h4>Maaf, Format Email Salah !</h4>
            </div>');    
            redirect('Customers/lupapass');
        }else{
            $data = array(
                'CUST_EMAIL' => $this->input->post('email',TRUE)
            );
                $query = $this->curl->simple_post($this->API.'/Cekakun', $data, array(CURLOPT_BUFFERSIZE => 10));
                $hasil = json_decode($query, true);
                if($hasil['code']==200) {
                    $kirimemail = $this->kirim_notif_lupapass($data['CUST_EMAIL']);

                    if ($kirimemail = "1") {
                        $this->session->set_flashdata('msglupapass', 
                        '<div class="alert alert-success">
                            <h4>Berhasil !! Silahkan Cek Email Anda</h4>
                        </div>');
                        redirect('Customers/lupapass');    
                    }else{
                        $this->session->set_flashdata('msglupapass', 
                        '<div class="alert alert-warning">
                            <h4>Maaf Email Belum Terkirim ..</h4>
                        </div>');
                        redirect('Customers/lupapass');
                    }
                }else{
                    $this->session->set_flashdata('msglupapass', 
                        '<div class="alert alert-danger">
                            <h4>Maaf Email Anda Tidak Ditemukan ..</h4>
                        </div>');
                        redirect('Customers/lupapass');
                }
        }
    }

    function kirim_notif_lupapass($email){
        $string = base64_encode($email);
        $code11 = str_rot13($string);
        $API_KEY = "1234";
        $file_template = "temp/email_lupapass.html";   
        // Opsi 1: cross domain ; Opsi 2: upload di local folder 
        // Ditentukan oleh hasil logic pengambilan informasi booking 
        $vars = array(

            "CUST_EMAIL" => $email,
            "LINK" => preg_replace("/,*$/", '', strtr($code11, '+/=', '-_,')),
        );
        $strvars = json_encode($vars); 
        $url_writer = "http://10.210.20.54/web/ota/mail/contentwriterhtml/".$file_template."/".urlencode($strvars)."?key=".$API_KEY;
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,$url_writer);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
        $out = curl_exec($ch);
        curl_close($ch);
        $file_name = json_decode($out);
        $file_name = $file_name[0];

        // Parameter (urut): 1. Email pengirim, 2. Nama Pengirim, 3. Email tujuan, 4. Subject email, 5. Nama file content yg dikirim (dari hasil API sebelumnya)
        $from       = urlencode("fiki.robby@sigma.co.id");
        $from_alias = urlencode("Portal Telkom Cloud");
        $to         = urlencode($email);
        $subject    = urlencode("Lupa Kata Sandi Telkom Cloud");
        $url_sender = "http://10.210.20.54/web/ota/mail/notifhtml/".$from."/".$from_alias."/".$to."/".$subject."/".$file_name."?key=".$API_KEY;
        $ch = curl_init();  
        curl_setopt($ch,CURLOPT_URL,$url_sender);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false); 
        $out = curl_exec($ch);
        curl_close($ch);

        return $out;
    }

    public function verify_akun($code){

        $emailuser = base64_decode(str_rot13($code));
        $data = array('CUST_EMAIL' => $emailuser );
        $data['users'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$data['CUST_EMAIL'].''));
        if ($data['users'] == null ) {
            $this->session->set_flashdata('msglupapass', 
                '<div class="alert alert-danger">
                    <h4>Maaf Email Anda Tidak Ditemukan ..</h4>
                </div>');
                redirect('Customers/lupapass');
        }
        else{
            $this->load->view('Home/template/PageHeader');
            $this->load->view('Home/Pagevnewpassword',$data);
            $this->load->view('Home/template/PageFooter1');
        }
    }

    function save_password(){
        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('new_pass','New_Pass','required');
        $this->form_validation->set_rules('re_new', 'Re_New', 'required|matches[new_pass]');
        $data = array(
                'CUST_EMAIL' => $this->input->post('email'),
                'CUST_AWDS' => $this->input->post('new_pass'),
                'STR_PASSWORD' => $this->input->post('re_new'),
            );
        
        if($this->form_validation->run() == false){
            echo "<script>alert('Gagal !! Cek Data');history.go(-1);</script>";
        }else{
            $data = array(
                'CUST_ID' => $this->input->post('idcust'),
                'CUST_EMAIL' => $this->input->post('email'),
                'STR_PASSWORD' => md5($this->input->post('new_pass')),
            );
            $update =  $this->curl->simple_put($this->API.'/Customer', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                $hasil = json_decode($update, true);
                if($hasil['code']==200) {
                    $this->session->set_flashdata('msgpassword', 
                    '<div class="alert alert-success">
                        <h4>Selamat Password Anda Telah DiUbah ..</h4>
                    </div>');    
                    redirect('Home/Akun');
                }else{
                    $this->session->set_flashdata('msgpassword', 
                    '<div class="alert alert-danger">
                        <h4>Maaf, Password Gagal DiUbah !</h4>
                    </div>');    
                    redirect('Home/Akun');
                }
        }
        
    }

    function changepass(){
        $data['users'] = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_EMAIL='.$this->session->userdata('email').''));
        $this->load->view('Home/template/PageHeader');
        $this->load->view('Home/Pagevnewpassword',$data);
        $this->load->view('Home/template/PageFooter1');
    }

}