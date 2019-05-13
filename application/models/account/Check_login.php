<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check_login($Info)
    {
        $this->db->select('*');
        $this->db->where('user_name', $Info['username']);
        $this->db->where('password', $Info['password']);
        $this->db->from('user');
        return $this->db->get();
    }

    function check_register($Info)
    {
        $this->db->select('*');
        $this->db->where('user_name', $Info['signup_username']);
        $this->db->from('user');
        return $this->db->get();
    }

    function register($Info)
    {
        $this->db->set('user_name', $Info['signup_username']);
        $this->db->set('password', $Info['signup_password']);
        $this->db->set('email', $Info['email']);
        $this->db->set('phone', $Info['phone']);
        $this->db->insert('user');
//        return $this->db->get();
    }
}

?>
