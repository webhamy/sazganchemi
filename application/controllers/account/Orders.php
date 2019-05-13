<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_orders');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        $data['Title'] = 'سفارشات';
        $UserID = 0;
        if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
            $UserID = @$_GET['UserID'];
        }
        if (@$_SESSION["UserInfo"]['user_type'] == '1') {
            $UserID = $_SESSION["UserInfo"]['id'];
        }
        $data['b'] = $this->Get_orders->get_orders($UserID);
        $data['content'] = 'Orders';
        $this->load->view('account/Account', $data);
    }
}

?>
