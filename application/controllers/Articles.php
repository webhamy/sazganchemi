<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Get_articles');
    }

    public function index()
    {
        if (@isset($_GET['pId']) && @$_GET['pId'] != '') {
            $pId = @$_GET['pId'];
            $data['h'] = $this->Get_articles->get_articles($pId);
            $data['title'] = 'جزییات';
            $this->load->view('showPost', $data);

        } else if (@isset($_GET['type']) && @$_GET['type'] != '') {
            $type = @$_GET['type'];
            $data['h'] = $this->Get_articles->get($type);
            if ($type ==1)   $data['title']="همایش ها";
            if ($type ==2)   $data['title']="سمینار ها";
            if ($type ==3)   $data['title']="مقالات";
            if ($type ==4)   $data['title']="اخبار کشاورزی";
              if ($type ==5)   $data['title']="اخبار محصولات";
            $data['type'] = $type;
            $this->load->view('article', $data);

        }
    }
    public function search()
    {

        $search = @$_POST['search'];
        $h = $this->Get_products->search_products($search);
        $result = '';
        foreach ($h->result() as $row) {
            $result .=
                '<div class="category">
            <img class="img" src="' . base_url() . '/uploads/' . $row->img_name . '">
            <span>' . $row->name . '</span></br>
            <a href="' . base_url() . 'index.php/products?pId=' . $row->id . '">
            <img src="' . base_url() . '/css/images/more.png"></a>
        </div>
            ';

        }
        echo $result;

    }

}
