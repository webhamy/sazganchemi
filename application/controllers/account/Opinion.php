<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_opinion');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        $data['Title'] = 'نظرات';
        $UserID = 0;
        if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
            $UserID = @$_GET['UserID'];
        }
        if (@$_SESSION["UserInfo"]['user_type'] == '1') {
            $UserID = $_SESSION["UserInfo"]['id'];
        }
        $data['h'] = $this->Get_opinion->get_opinion($UserID);
        $data['content'] = 'Opinion';
        $this->load->view('account/Account', $data);
    }

    public function delete()
    {
        $UserID = 0;
        if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
            $UserID = @$_GET['UserID'];
            $this->Get_opinion->delete_opinion($UserID);
        }
        redirect(base_url() . 'index.php/account/Opinion');
    }
}

?>
