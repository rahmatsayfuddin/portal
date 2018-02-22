<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://10.210.20.55/api/rest/";
        //$this->API="http://localhost/RestTelkomCloud";
        $this->load->library(array('session','form_validation','encrypt'));
        $this->load->helper(array('url','form','security'));
    }

    function index(){

        //print_r($this->cart->contents());
        /*
        foreach ($this->cart->contents() as $key) {
            ?>
            <table>
            <tbody>
                <tr>
                                                <td></td>
                                                <?php if ($key['id']==70) {
                                                ?>
                                                    <td colspan="6"><h4 class="product-name"><?php echo 'Paket '.$key['name']; ?></h4></td>
                                                <?php
                                                }else{
                                                ?>
                                                    <td colspan="6"><h4 class="product-name"><?php echo $key['name'].' - '.$key['options']['vcpupaket'].','.$key['options']['rampaket']; ?></h4></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>VCPU</h6>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($key['id']=='70') {
                                                            echo '<h6>: '.$key['options']['vcpu'].' vCPU</h6>';
                                                        }else{
                                                            echo '<h6>: '.$key['options']['vcpupaket'].'</h6>';
                                                        }
                                                    ?>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <h6>RAM</h6>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($key['id']=='70') {
                                                            echo '<h6>: '.$key['options']['ram'].' GB</h6>';
                                                        }else{
                                                            echo '<h6>: '.$key['options']['rampaket'].'</h6>';
                                                        }
                                                    ?>
                                                </td>
                                                <td rowspan="6">
                                                    <span class="text-primary">Rp <?php echo number_format($key['price']); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>SATA</h6>
                                                </td>
                                                <td>
                                                    <h6><?php echo ': '.$key['options']['sata'].' GB'; ?></h6>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <h6>SAS</h6>
                                                </td>
                                                <td>
                                                    <h6><?php echo ': '.$key['options']['sas'].' GB'; ?></h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>IP Publik</h6>
                                                </td>
                                                <td>
                                                    <h6><?php echo ': '.$key['options']['ip'].' IP'; ?></h6>
                                                </td>
                                                <td></td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>VNS Firewall</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['firewall']=='1') {
                                                            echo "<h6>: Ya</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <h6>VNS Load Balancer</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['loadbalancer']=='1') {
                                                            echo "<h6>: Ya</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>VNS VPN</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['vpn']=='1') {
                                                            echo "<h6>: Ya</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <h6>Additional Vlan</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['vlan']=='1') {
                                                            echo "<h6>: Ya</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>OS</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['os']=='windows2008') {
                                                            echo "<h6>: Windows Server 2008</h6>";
                                                        }else if ($key['options']['os']=='windows2012') {
                                                            echo "<h6>: Windows Server 2012</h6>";
                                                        }else if ($key['options']['os']=='windows2012r2') {
                                                            echo "<h6>: Windows Server 2012 R2</h6>";
                                                        }else if ($key['options']['os']=='remote') {
                                                            echo "<h6>: Windows Remote Dekstop Service</h6>";
                                                        }else if ($key['options']['os']=='linux') {
                                                            echo "<h6>: Ret Hat Linux Enterprice</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <h6>Database</h6>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($key['options']['db']=='web') {
                                                            echo "<h6>: MYSQL Server Web</h6>";
                                                        }else if ($key['options']['db']=='standart') {
                                                            echo "<h6>: MYSQL Server Standart</h6>";
                                                        }else if ($key['options']['db']=='enterprice') {
                                                            echo "<h6>: MYSQL Server Enterprice</h6>";
                                                        }else{
                                                            echo "<h6>: Tidak</h6>";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                </tbody>
            </table>
            <?php
        }
        */
        $content = '
            'foreach ($this->cart->contents() as $key) { '
                <table>
                    <tr>
                        <td>Paket "'$key['name'];'"<td>
                    </tr>
                </table>
            '}'
        ';
        
        echo $content;

        /*
        $kirimemail = $this->kirim_notif_invoice($data['CUST_ID'],$data['CUST_EMAIL']);

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
        */
    }

    function kirim_notif_invoice($content,$email){

        $API_KEY = "1234";
        $file_template = "temp/email_invoice.html";


        // Opsi 1: cross domain ; Opsi 2: upload di local folder 
        // Ditentukan oleh hasil logic pengambilan informasi booking 
        $vars = array(

            "CUST_EMAIL" => $email,
            "CONTENT" => $content;
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
}