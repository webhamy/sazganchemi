<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_users');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        if (@$_SESSION["UserInfo"]['user_type'] == '0') {
            $data['Title'] = 'لیست کاربران';
            $UserID = 0;
            if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
                $UserID = @$_GET['UserID'];
            }
            $data['h'] = $this->Get_users->get_users($UserID);
            $data['content'] = 'Users';
        } else {
            $data['Title'] = 'اخطار';
            $data['content'] = 'NoAccess';
        }
        $this->load->view('account/Account', $data);
    }

    public function delete()
    {
        $UserID = 0;
        if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
            $UserID = @$_GET['UserID'];
            $this->Get_users->delete_users($UserID);
        }
        redirect(base_url() . 'index.php/account/Users');
    }
}

?>
