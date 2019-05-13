<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account/Get_graph');
        if (!@isset($_SESSION["UserInfo"])) {
            redirect(base_url() . 'index.php/account/Login');
        }
    }

    public function index()
    {
        $data['Title'] = 'آمار';
        $data['h'] = $this->Get_graph->get_graph();
        $data['content'] = 'Graph';
        $this->load->view('account/Account', $data);

    }
}

?>
