<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_articles');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        if (@$_SESSION["UserInfo"]['user_type'] == '0') {
            $data['Title'] = 'مقالات';
            $data['content'] = 'Show_articles';
            if (@isset($_GET['type']) && @$_GET['type'] != '') {
                $type = @$_GET['type'];
                $data['h'] = $this->Get_articles->get($type);
                if ($type ==1)   $data['title']="همایش ها";
                if ($type ==2)   $data['title']="سمینار ها";
                if ($type ==3)   $data['title']="مقالات";
                if ($type ==4)   $data['title']="اخبار کشاورزی";
                  if ($type ==5)   $data['title']="اخبار محصولات";
                $data['type'] = $type;
            }
            else {
              $data['h'] = $this->Get_articles->get_articles();

            }

        } else {
            $data['Title'] = 'اخطار';
            $data['content'] = 'NoAccess';
        }
        $this->load->view('account/Account', $data);
    }

    public function delete_data()
    {
        $ID = 0;
        if (@isset($_GET['ID']) && @$_GET['ID'] != '') {
            $ID = @$_GET['ID'];
            $this->Get_products->delete_products($ID);
        }
        redirect(base_url() . 'index.php/account/Show_articles');
    }
}

?>
