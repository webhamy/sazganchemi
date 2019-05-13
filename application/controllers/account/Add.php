<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        if (@$_SESSION["UserInfo"]['user_type'] == '0') {
            $data['Title'] = '  اضافه کردن محصول جدید';
            $data['content'] = 'Add';
        } else {
            $data['Title'] = 'اخطار';
            $data['content'] = 'NoAccess';
        }
        $this->load->view('account/Account', $data);
    }

    public
    function check_data()
    {

        $data['Title'] = '  اضافه کردن محصول جدید';
        $data['content'] = 'Add';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'نام', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('product_type', 'نوع محصول', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('pub_name', 'نام لاتین', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('product_title', 'عنوان محصول', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('toxicity_degree', 'درجه سمیت', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('how_work', 'نحوه اثر', 'trim|max_length[1000]');
        $this->form_validation->set_rules('karens', 'دوره کارنس', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('EC', 'EC', 'required|trim|max_length[1000]');


        $this->form_validation->set_rules('consumption[]', 'میزان مصرف', 'trim|max_length[1000]');

        $this->form_validation->set_rules('target_pet[]', 'آفت هدف', 'trim|max_length[1000]');

        $this->form_validation->set_rules('target_product[]', 'محصول هدف', 'trim|max_length[1000]');

        $this->form_validation->set_rules('color', 'رنگ', 'required|trim|max_length[1000]');
        $this->form_validation->set_rules('des', 'توضیحات', 'required|trim|max_length[10000]');

        $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
        $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
        $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
        $config['max_size'] = 2000;
        $error = array();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false | !$this->upload->do_upload('image')) {
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

            $error = array('error' => $this->upload->display_errors());
            $this->load->view('account/Account', $data + $error);

        } else {
            $this->load->model('account/Products_model');
            $this->Products_model->insert_data($_POST, $_FILES);
        }
    }
}
