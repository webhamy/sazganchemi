<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('account/Check_login');
    }
    public function index()
    {
        if (isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Account');
        } else {
            $data['Title'] = 'ورود';
            $this->load->view('account/Login', $data);
        }
    }

    public function check_data()
    {
        if (isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Account');
        } else {
            $data['Title'] = 'ورود';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'نام کاربری', 'required|trim|max_length[20]|alpha_numeric_spaces');
            $this->form_validation->set_rules('password', 'رمز ورود', 'required|trim|max_length[100]|min_length[8]|alpha_numeric_spaces');

            $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
            $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
            $this->form_validation->set_message('min_length', '%s وارد شده باید حداقل 8 کاراکتر باشد');
            $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');
            if ($this->form_validation->run() == false) {
                $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            } else {
                $count = $this->Check_login->check_login($_POST);
                if ($count->num_rows()) {
                    $_SESSION['UserInfo'] = $count->result_array()[0];
                    if ($_POST['username'] == 'admin') redirect(base_url() . 'index.php/account/Account');
                    else redirect(base_url() . 'index.php/Card/');
                } else {
                    $data['error'] = 'نام کاربری یا رمز عبور صحیح نمی باشد';
                }
            }
            $this->load->view('account/Login', $data);
        }

    }

    public function log_out()
    {
        unset($_SESSION["UserInfo"]);
        redirect(base_url() . 'index.php/Home');
//        باید صفحه اصلی سایت بشه
    }

    public function register()
    {
        if (isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Account');
        } else {
            $data['Title'] = 'ورود';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('signup_username', 'نام کاربری', 'required|trim|max_length[20]|alpha_numeric_spaces');
            $this->form_validation->set_rules('signup_password', 'رمز ورود', 'required|trim|max_length[100]|alpha_numeric_spaces');
            $this->form_validation->set_rules('signup_rePassword', 'تکرار رمز عبور', 'required|trim|max_length[100]|alpha_numeric_spaces');
            $this->form_validation->set_rules('email', 'ایمیل', 'required|trim|max_length[100]|valid_email');
            $this->form_validation->set_rules('phone', 'شماره تلفن', 'required|trim|exact_length[11]|alpha_numeric_spaces');

            $this->form_validation->set_message('required', 'پر بودن %s اجباری است');
            $this->form_validation->set_message('max_length', '%s وارد شده طولانی است');
            $this->form_validation->set_message('exact_length', '%s وارد شده درست نیست');
            $this->form_validation->set_message('alpha_numeric_spaces', '%s وارد شده صحیح نیست');
            $this->form_validation->set_message('valid_email', 'ایمیل وارد شده صحیح نیست');

            if ($this->form_validation->run() == false) {
                $data['login_content'] = 'Signupform';
                $this->load->view('account/Login', $data);
            } else {

                $count = $this->Check_login->check_register($_POST);
                if ($count->num_rows()) {
                    $data['error'] = 'نام کاربری از قبل وجود دارد';
                } else {
                    if ($_POST['signup_password'] !== $_POST['signup_rePassword']) $data['error'] = 'تکرار رمز عبور صحیح نیست';
                    else {
                        $this->Check_login->register($_POST);
                        $data['error'] = 'ثبت نام با موفقیت انجام شد، وارد شوید';
                    }
                }
                $data['login_content'] = 'Signupform';
                $this->load->view('account/Login', $data);
            }

        }

    }

}
