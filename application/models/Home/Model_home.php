<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends CI_Model {

  var $API ="";
  function __construct() {
    parent::__construct();
    $this->API="http://10.210.20.55/api/rest";
  }

  public function Authentification() {
    $notif = array();
    $data = array(
      'CUST_EMAIL'  =>  $this->input->post('email',TRUE),
      'STR_PASSWORD'   =>  $this->input->post('password',TRUE)
    );
    
    $query = $this->curl->simple_post($this->API.'/Logincustomer', $data, array(CURLOPT_BUFFERSIZE => 10));
    $hasil = json_decode($query, true);
    if($hasil['code']==200) {

      $sess_data = array(
        'logged_in' => 'SudahLoggin',
        'level'     => 'Customer',
        'email'     => $this->input->post('email',TRUE)
      );
      $this->session->set_userdata('logged_in', $sess_data);
                //$this->update_last_login($row->users_id);
      
    } else {
      $notif['message'] = 'Username or password incorrect !';
      $notif['type'] = 'danger';
    }

    return $notif;
    
  }

  private function update_last_login($users_id) {
    $sql = "UPDATE users SET last_login = NOW() WHERE users_id=" . $this->db->escape($users_id);
    $this->db->query($sql);
  }

    /*
     * 
     */

    public function register() {
      $notif = array();
      $data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email' => $this->input->post('email'),
        'password' => Utils::hash('sha1', $this->input->post('password'), AUTH_SALT),
        'is_active' => $this->input->post('is_active') ? : 0
      );
      $this->db->insert('users', $data);
      $users_id = $this->db->insert_id();
      if ($this->db->affected_rows() > 0) {
        $notif['message'] = 'Saved successfully';
        $notif['type'] = 'success';
        unset($_POST);
      } else {
        $notif['message'] = 'Something wrong !';
        $notif['type'] = 'danger';
      }
      return $notif;
    }

    /*
     * 
     */

    public function check_email($email) {
      $sql = "SELECT * FROM users WHERE email = " . $this->db->escape($email);
      $res = $this->db->query($sql);
      if ($res->num_rows() > 0) {
        $row = $res->row();
        return $row;
      }
      return null;
    }

    public function register_clm($param)
    {
      $token=$this->get_token_clm();
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_PORT => "9443",
        CURLOPT_URL => "https://10.80.170.19:9443/csm/User/create",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST=> 0,
        CURLOPT_SSL_VERIFYPEER=> 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $this->load->view('request/create_user',$param,true),
        CURLOPT_HTTPHEADER => array(
          "authentication-token:".$token,
          "cache-control: no-cache",
          "content-type: application/json",
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        return  json_decode($response,true);

      }
    }

    public function get_token_clm($value='')
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_PORT => "9443",
        CURLOPT_URL => "https://10.80.170.19:9443/csm/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST=> 0,
        CURLOPT_SSL_VERIFYPEER=> 0,
        CURLOPT_HEADER=> true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n\t\"username\": \"clmadmin\",\n\t\"password\": \"P@ssw0rd\"\n}",
        CURLOPT_HTTPHEADER => array(
          "cache-control: no-cache",
          "content-type: application/json",
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
       $token = $this->strHeaders2Hash($response);
       return  $token['Authentication-Token'];
     }
   }

   function strHeaders2Hash($r) {
    $o = array();
    $r = substr($r, stripos($r, "\r\n"));
    $r = explode("\r\n", $r);
    foreach ($r as $h) {
      @list($v, $val) = explode(": ", $h);
      if ($v == null) continue;
      $o[$v] = $val;
    }
    return $o;
  }

}
