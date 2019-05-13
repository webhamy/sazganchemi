<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_data extends CI_Controller
{

    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'نام', 'required|trim|max_length[100]|alpha');
        $this->form_validation->set_rules('email', 'ایمیل', 'required|trim|max_length[100]|valid_email');
        $this->form_validation->set_rules('company', ' نام شرکت', 'required|trim|max_length[100]|alpha');
        $this->form_validation->set_rules('title', 'عنوان پیام', 'required|trim|max_length[12]|alpha');
        $this->form_validation->set_rules('message', 'درخواست', 'required|trim|max_length[500]|alpha');

        $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
        $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
        $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');
        $this->form_validation->set_message('alpha', '%s وارد شده صحیح نیست');
        $this->form_validation->set_message('valid_email', 'ایمیل وارد شده صحیح نیست');

        if ($this->form_validation->run() == false) {
            $this->load->view('contact_us');
        } else {
            $this->load->model('Success');
            $this->Success->insert_data($_POST);
        }
    }
}
