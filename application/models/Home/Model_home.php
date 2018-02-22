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

}
