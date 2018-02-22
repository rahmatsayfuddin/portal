<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        
        $this->API="http://10.210.20.55/api/rest";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form','security'));
        //$this->load->model('Admin/Model_Admin','admin');
    }
    
    function add_cart(){ //fungsi Add To Cart
        $data = array(
            'id'    => $this->input->post('pack_id'),
            'name'  => $this->input->post('pack_name'),
            'qty'   => '1',
            'price' => $this->input->post('totalall'),
            'options' => array(
                'prod_id'      => $this->input->post('prod_id'),
                'vcpupaket'    => $this->input->post('vcpupaket'),
                'rampaket'     => $this->input->post('rampaket'),
                'vcpu'         => $this->input->post('amount'),
                'ram'          => $this->input->post('duration'),
                'sata'         => $this->input->post('sata'),
                'sas'          => $this->input->post('sas'),
                'ip'           => $this->input->post('ip'),
                'firewall'     => $this->input->post('firewall'),
                'loadbalancer' => $this->input->post('load_balancer'),
                'vpn'          => $this->input->post('vpn'),
                'vlan'         => $this->input->post('vlan'),
                'os'           => $this->input->post('os'),
                'db'           => $this->input->post('db'),
            )
         );
        //print_r($data);
        
        if($data['price'] == "0"){
            redirect('Harga');
        }else{
            $this->cart->insert($data);
            if (!$this->cart->contents()) {
                echo '<br/><br/>No Item in Cart';
            }else{    
                echo $this->show_cart(); //tampilkan cart setelah added
                redirect('Harga');
            }
        }
        
    }

    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        $output .= '<div class="cart-products">';

        foreach ($this->cart->contents() as $items) {
            if ($items['id']=='70') {
                $produkk = $items['options']['vcpu'].' vCPU & '.$items['options']['ram'].' GB';
            }else{
                $produkk = $items['options']['vcpupaket'].' & '.$items['options']['rampaket'];
            }

            if ($items['options']['prod_id']=='2') {
                $gambar = "vdc.png"; 
            }else{
                $gambar = "vm.png";
            }

            $no++;
                $output .='

                    <div class="product product-sm">
                        <a type="button" id="'.$items['rowid'].'" class="hapus_cart btn-remove"><i class="fa fa-times"></i></a>
                        <figure class="product-image-area">
                            <a href="" title="Product Name" class="product-image">
                                <img src="'.base_url().'assets_1/img/logo_sas_ias/'.$gambar.'" alt="Product Name">
                            </a>
                        </figure>
                        <div class="product-details-area">
                            <h2 class="product-name"><a href="" title="Product Name">'.$items['name'].'  ('.$items['qty'].')'.'</a></h2>
                                <div>
                                    <span class="product-price">'.$produkk.'</span>
                                </div>
                                <div class="cart-qty-price">
                                    <span class="product-price">'.'Rp '.number_format($items['price']).'</span>
                                </div>
                        </div>
                    </div>
                ';
        }

        $output .=  '
                </div>                            
                <div class="cart-totals">
                    Total: <span>'.'Rp '.number_format($this->cart->total()).'</span>
                </div>                            
                <div class="cart-actions">
                    <center>
                        <a href="'.base_url().'Viewcart" class="btn btn-primary">Checkout</a>
                    </center>
                </div>
        ';

        return $output;

    }

    function load_cart(){ //load data cart
        echo $this->show_cart();
    }

    function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

}