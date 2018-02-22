<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_coba extends CI_Controller {

	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/RestTelkomCloud";
        //$this->API="http://10.210.20.55/api/rest";
    }
    function index(){
        $data['ProdVMachine1'] = json_decode($this->curl->simple_get($this->API.'/PackageSmall'));
        $this->load->view('v_cart',$data);
    }

    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'), 
            'name' => $this->input->post('produk_nama'), 
            'price' => $this->input->post('produk_harga'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
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

    function viki(){
        $awds = json_decode($this->curl->simple_get($this->API.'/CustomerRow?CUST_ID=12'));
        echo $awds->CUST_NAME;
        
    }

    function kurnia(){
        $awds = json_decode($this->curl->simple_get($this->API.'/Customer?CUST_ID=1988'));
        print_r($awds);
        
    }
}
	