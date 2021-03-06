<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller
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
            $data['Title'] = '  اضافه کردن پست جدید';
            $data['content'] = 'Articles';
        } else {
            $data['Title'] = 'اخطار';
            $data['content'] = 'NoAccess';
        }
        $this->load->view('account/Account', $data);
    }

    public function check_data()
    {
        $data['Title'] = '  اضافه کردن پست جدید';
        $data['content'] = 'Articles';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'نام', 'required|trim|max_length[200]');
        $this->form_validation->set_rules('hide_text', 'متن پست', 'required|trim|max_length[1000000]');
        $this->form_validation->set_rules('post_type', 'نوع پست', 'required|trim|max_length[200]');

        $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
        $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
        $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc';
        $config['max_size'] = 2000;
        $error = array();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false | !$this->upload->do_upload('post_image')) {
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

            $error = array('error' => $this->upload->display_errors());
            $this->load->view('account/Account', $data + $error);

        } else {
            $this->load->model('account/Articles_model');
            $this->Articles_model->insert_data($_POST, $_FILES);
        }
    }
}
