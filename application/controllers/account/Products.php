<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_products');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        if (@$_SESSION["UserInfo"]['user_type'] == '0') {
          $data['Title'] = 'محصولات';
          $data['content'] = 'Products';
         if (@isset($_GET['type']) && @$_GET['type'] != '') {
              $type = @$_GET['type'];
              $data['h'] = $this->Get_products->get($type);
              $data['type'] = $type;

          } else {
              $data['h'] = $this->Get_products->get_products();
          }
        }
        else {
            $data['Title'] = 'اخطار';
            $data['content'] = 'NoAccess';
        }
        $this->load->view('account/Account', $data);
    }

    public function delete_data()
    {
        $UserID = 0;
        if (@isset($_GET['UserID']) && @$_GET['UserID'] != '') {
            $UserID = @$_GET['UserID'];
            $this->Get_products->delete_products($UserID);
        }
        redirect(base_url() . 'index.php/account/Products');
    }
}

?>
