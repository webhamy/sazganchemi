<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    function index()
    {
        $data['Title'] = 'صفحه نخست';
        $data['content'] = 'First';
        $this->load->view('account/Account', $data);
    }
}
