<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation','pagination'));
        $this->load->helper(array('url','form','security'));
        $this->load->model('Admin/Model_admin','admin');
    }

    function index(){

    $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $this->MyAccount();

        }else{
            redirect('Admin/Login');
        }
    }

    function Login(){
         $this->load->view('Dashboard_admin/page_admin/v_login_admin');
    }

    function ActionLogin(){

        // set validation rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            echo "<script>alert('Lengkapi Data Anda dengan Benar');history.go(-1);</script>";        
        }else{
            $data = array(
                'OFFICER_EMAIL'  =>  $this->input->post('email',TRUE),
                'STR_PASSWORD'   =>  md5($this->input->post('password',TRUE))
            );
            $query = $this->curl->simple_post($this->API.'/Loginadmin', $data, array(CURLOPT_BUFFERSIZE => 10));
            $hasil = json_decode($query, true);
            //print_r($hasil);
            
            if($hasil['code']==200) {

                $data_admin = json_decode($this->curl->simple_get($this->API.'/Admin?OFFICER_EMAIL='.$data['OFFICER_EMAIL'].''));
                    
                    foreach ($data_admin as $key) {
                        $email = $key->OFFICER_EMAIL;
                        $name = $key->OFFICER_NAME;
                        $idoffice = $key->OFFICER_ID;
                    }
                    

                    $sess_data = array(
                        'status' => 'login',
                        'level'  => 'admin',
                        'idoffice' => $idoffice,
                        'email'  => $email,
                        'name'   => $name
                    );
                    
                    $this->session->set_userdata($sess_data);
                    redirect('Admin');
                        
            }elseif ($hasil['code']==400) {
                $this->session->set_flashdata('msgloginadmin', 
                    '<div class="alert alert-danger">
                        <h4>Maaf, User Anda Belum Aktif !</h4>
                    </div>');    
                redirect('Admin/Login');   
            }else {
                $this->session->set_flashdata('msgloginadmin', 
                    '<div class="alert alert-danger">
                        <h4>Maaf Anda Gagal login </h4>
                    </div>');    
                redirect('Admin/Login');
            }   
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Admin');
    }

    function MyAccount(){

        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){
            
            $data['officer'] = json_decode($this->curl->simple_get($this->API.'/Officer?OFFICER_ID='.$this->session->userdata('idoffice')));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/page_admin/AdminAccount',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }

    function Customer(){

        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $data = json_decode($this->curl->simple_get($this->API.'/Customer'));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/page_admin/AdminCustomers',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }

    function DataCustomers($page,$keyword=''){
        // $keyword = 'Kurnia';
        // $page = 1;
        $type="'Customer'";
        $limit=10;
        $start =($page*10)-$limit;
        $data = json_decode($this->curl->simple_get($this->API.'/CustomerSearch?limit='.$limit.'&start='.$start.'&keyword='.$keyword.''));
        
        $config['base_url'] = '#';
        $config['total_rows'] = $data->total;
                //config for bootstrap pagination class integration
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('onclick' => 'get_data(this,'.$type.')','keyword' => $keyword);
        $config['attributes']['rel'] = FALSE;

        $this->pagination->initialize($config);
        echo "<table class='table table-bordered'>
            <thead>
            <th>No</th>
            <th>Cust Id</th>
            <th>Cust Name</th>
            <th>Cust Email</th>
            <th>Cust Phone</th>
            <th>Gender</th>
            <th>Is Active</th>
            <th>Action</th>
            </thead>
            <tbody >";

            // echo $data->data[0]->CUST_ID;
            // echo "<br>";
            // foreach ($data->data as $key) {
            //     echo "mbah ".$mbah_dukun->CUST_ID;
            //     echo "\n";
            // }
            $start=0;
            foreach ($data->data as $key) {
                $start++;
                echo " <tr>
                    <td>".$start."</td>
                    <td>".$key->CUST_ID."</td>
                    <td>".$key->CUST_NAME."</td>
                    <td>".$key->CUST_EMAIL."</td>
                    <td>".$key->CUST_PHONE."</td>
                    ";
                if ($key->GENDER==1) {
                    echo "<td>Laki-laki</td>";
                }else{
                    echo "<td>Perempuan</td>";
                }
                if ($key->IS_ACTIVE==1) {
                    echo "<td>Aktif</td>";
                }else{
                    echo "<td>Tidak Aktif</td>";
                }
                    
            echo "
                <td>
                    <a data-toggle='modal' data-target='#Cancel' data-invoice=".$key->CUST_ID.">
                      <button type='button' style='background-color: red; color: white;'> <span class='fa fa-remove'></span> </button>
                    </a>
                    <a data-toggle='modal' data-target='#detail' data-invoice=".$key->CUST_ID.">
                      <button type='button' style='background-color: black; color: white;'> <span class='fa fa-eye'></span> </button>
                    </a>
                </td>
            </tr>";
            }
            echo "</tbody></table>";
            echo $this->pagination->create_links();
    }

    function Invoice(){
        
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $data = json_decode($this->curl->simple_get($this->API.'/Customer'));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/page_admin/AdminInvoice',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }

    function DataInvoice($page,$keyword=''){
        // $keyword = 'Kurnia';
        // $page = 1;
        $type="'Invoice'";
        $limit=10;
        $start =($page*10)-$limit;
        $data = json_decode($this->curl->simple_get($this->API.'/InvoiceSearch?limit='.$limit.'&start='.$start.'&keyword='.$keyword.''));
        
        $config['base_url'] = '#';
        $config['total_rows'] = $data->total;
                //config for bootstrap pagination class integration
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('onclick' => 'get_data(this,'.$type.')','keyword' => $keyword);
        $config['attributes']['rel'] = FALSE;

        $this->pagination->initialize($config);
        echo "<table class='table table-bordered'>
            <thead>
            <th>No</th>
            <th>InvNo</th>
            <th>PackID</th>
            <th>InvPeriod</th>
            <th>InvAmount</th>
            <th>InvTotal</th>
            <th>InvDate</th>
            <th>InvStatus</th>
            <th>CustId</th>
            <th>Action</th>
            </thead>
            <tbody >";

            // echo $data->data[0]->CUST_ID;
            // echo "<br>";
            // foreach ($data->data as $key) {
            //     echo "mbah ".$mbah_dukun->CUST_ID;
            //     echo "\n";
            // }
            $start=0;
            foreach ($data->data as $key) {
                $start++;
                echo " <tr>
                    <td>".$start."</td>
                    <td>".$key->INV_NO."</td>
                    <td>".$key->PACK_ID."</td>
                    <td>".$key->INV_PERIOD."</td>
                    <td>".$key->INV_AMOUNT."</td>
                    <td>".$key->INV_TOTAL."</td>
                    <td>".$key->INV_DATE."</td>
                    ";
                if ($key->INV_STATUS_ID==1) {
                    echo "<td>Belum Dibayar</td>";
                }else if ($key->INV_STATUS_ID==3) {
                    echo "<td>Sukses Dibayar</td>";
                }
                else{
                    echo "<td>NAN</td>";
                }
                    
            echo "
                <td>".$key->CUST_ID."</td>
                <td>
                    <a data-toggle='modal' data-target='#Cancel' data-invoice=".$key->INV_NO.">
                      <button type='button' style='background-color: red; color: white;'> <span class='fa fa-remove'></span> </button>
                    </a>
                    <a data-toggle='modal' data-target='#detail' data-invoice=".$key->INV_NO.">
                      <button type='button' style='background-color: black; color: white;'> <span class='fa fa-eye'></span> </button>
                    </a>
                </td>
            </tr>";
            }
            echo "</tbody></table>";
            echo $this->pagination->create_links();
    }

    function Product(){
        
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $data = json_decode($this->curl->simple_get($this->API.'/Customer'));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/page_admin/AdminProduct',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }

    function DataProduct($page,$keyword=''){
        // $keyword = 'Kurnia';
        // $page = 1;
        $type="'Product'";
        $limit=10;
        $start =($page*10)-$limit;
        $data = json_decode($this->curl->simple_get($this->API.'/ProductSearch?limit='.$limit.'&start='.$start.'&keyword='.$keyword.''));
        
        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $data->totaldata;
                //config for bootstrap pagination class integration
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('onclick' => 'get_data(this,'.$type.')','keyword' => $keyword);
        $config['attributes']['rel'] = FALSE;

        $this->pagination->initialize($config);
        echo "<table class='table table-bordered'>
            <thead>
            <th>No</th>
            <th>ProdId</th>
            <th>ProdName</th>
            <th>ProdRating</th>
            <th>IsPublish</th>
            <th>Action</th>
            </thead>
            <tbody >";

            foreach ($data->data as $key) {
                $start++;
                echo " <tr>
                    <td>".$start."</td>
                    <td>".$key->PROD_ID."</td>
                    <td>".$key->PROD_NAME."</td>
                    <td>".$key->PROD_RATING."</td>
                    ";
                if ($key->IS_PUBLISH==1) {
                    echo "<td>DI Publish</td>";
                }else{
                    echo "<td>Belum DiPublish</td>";
                }
                    
            echo "
                <td>
                    <a data-toggle='modal' data-target='#Cancel' data-invoice=".$key->PROD_ID.">
                      <button type='button' style='background-color: red; color: white;'> <span class='fa fa-remove'></span> </button>
                    </a>
                    <a data-toggle='modal' data-target='#detail' data-invoice=".$key->PROD_ID.">
                      <button type='button' style='background-color: black; color: white;'> <span class='fa fa-eye'></span> </button>
                    </a>
                </td>
            </tr>";
            }
            echo "</tbody></table>";
            echo $this->pagination->create_links();
    }

    function Package(){
        
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $data['package'] = json_decode($this->curl->simple_get($this->API.'/Package'));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/page_admin/AdminPackage',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }

    function DataPackage($page,$keyword=''){
        // $keyword = 'Kurnia';
        // $page = 1;
        $type="'Package'";
        $limit=10;
        $start =($page*10)-$limit;
        $data = json_decode($this->curl->simple_get($this->API.'/PackageSearch?limit='.$limit.'&start='.$start.'&keyword='.$keyword.''));
        
        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $data->totaldata;
                //config for bootstrap pagination class integration
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('onclick' => 'get_data(this,'.$type.')','keyword' => $keyword);
        $config['attributes']['rel'] = FALSE;

        $this->pagination->initialize($config);
        echo "<table class='table table-bordered'>
            <thead>
            <th>No</th>
            <th>PackId</th>
            <th>ProdId</th>
            <th>PackName</th>
            <th>PackPrice</th>
            <th>PackFeature</th>
            <th>Action</th>
            </thead>
            <tbody >";

            foreach ($data->data as $key) {
                $start++;
                echo " <tr>
                    <td>".$start."</td>
                    <td>".$key->PACK_ID."</td>
                    <td>".$key->PROD_ID."</td>
                    <td>".$key->PACK_NAME."</td>
                    <td>".$key->PACK_PRICE."</td>
                    <td>".$key->FEATURE_DESC."</td>
                    ";
                
                    
            echo "
                <td>
                    <a data-toggle='modal' data-target='#Cancel' data-invoice=".$key->PACK_ID.">
                      <button type='button' style='background-color: red; color: white;'> <span class='fa fa-remove'></span> </button>
                    </a>
                    <a data-toggle='modal' data-target='#detail' data-invoice=".$key->PACK_ID.">
                      <button type='button' style='background-color: black; color: white;'> <span class='fa fa-eye'></span> </button>
                    </a>
                </td>
            </tr>";
            }
            echo "</tbody></table>";
            echo $this->pagination->create_links();
    }

    function Support(){
        
        $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('level')=='admin');
        if($logged_in){

            $data = json_decode($this->curl->simple_get($this->API.'/Customer'));
            $this->load->view('Dashboard_admin/template_admin/admin_header');
            $this->load->view('Dashboard_admin/template_admin/admin_nav');
            $this->load->view('Dashboard_admin/template_admin/admin_table',$data);
            $this->load->view('Dashboard_admin/template_admin/admin_footer');

        }else{
            redirect('Admin/Login');
        }
    }
    
}