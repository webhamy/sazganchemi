<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }

    public function products()
    {
        $data['title'] = 'سازگان شیمی';
        $this->load->view('products',$data);
    }

    public function contact_us()
    {
      $data['title'] = 'ارتباط با ما ';
      $this->load->view('contact_us',$data);
    }
      public function details(){
        $data['title'] = 'معرفی محصول ';
        $this->load->view('product_details',$data);
      }
    public function description(){
        $data['title'] = 'توضیحات محصول ';
        $this->load->view('product_des',$data);
    }
    public function  article (){
        $data['title'] = 'مقالات';
        $this->load->view('article',$data);
    }
    public function  news (){
        $data['title'] = 'اخبار';
        $this->load->view('news',$data);
    }

}
