<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Get_products');
    }

    public function index()
    {
        $data['title'] = 'سبد خرید';
        $this->load->view('card', $data);
    }

    public function balance()
    {
        if (!isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/login');
        } else {
            $data['title'] = 'سبد خرید';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('address', 'آدرس', 'required|trim|max_length[200]|alpha_numeric_spaces');
            $this->form_validation->set_rules('phone', 'شماره تلفن', 'required|trim|max_length[11]');

            $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
            $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
            $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'سبد خرید';
                $this->load->view('card',$data);
            } else {
                $this->load->model('Success');
                $this->Success->order_product($_POST);
                unset($_SESSION["card"]);
            }
        }
    }

    public function delete()
    {
        $pId = $_GET["pId"];
        unset($_SESSION['card'][$pId]);
        $data['title'] = 'محصولات';
        redirect(base_url() . 'index.php/Products');
    }
}