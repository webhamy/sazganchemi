<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model('Get_articles');
  }
    public function index()
    {
        $data['title'] = 'سازگان شیمی';
        $data['h'] = $this->Get_articles->getlast();
        $this->load->view('index',$data);
    }

}
