<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function register($data) {
        $this->db->insert('tb_login', $data);
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $user = $this->db->get('tb_login')->row_array();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}
