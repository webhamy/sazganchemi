<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Get_products');
    }

    public function index()
    {
        if (@isset($_GET['pId']) && @$_GET['pId'] != '') {
            $pId = @$_GET['pId'];
            $data['h'] = $this->Get_products->get_products($pId);
            $data['title'] = 'جزییات';
            $this->load->view('productDetails', $data);

        } else if (@isset($_GET['type']) && @$_GET['type'] != '') {
            $type = @$_GET['type'];
            $data['h'] = $this->Get_products->get($type);
            $data['title'] = 'محصولات';
            $data['type'] = $type;
            $this->load->view('products', $data);

        } else {
            $data['h'] = $this->Get_products->get_products();
            $data['title'] = 'محصولات';
            $this->load->view('products', $data);
        }
    }

    public function addtocard()
    {
        $pId = @$_GET['pId'];
        $name = @$_GET['name'];
        $price = @$_GET['price'];
        $_SESSION['card'] [] = array('ID' => $pId, 'Name' => $name, 'Price' => $price);
        $data['title'] = 'محصولات';
        redirect(base_url() . 'index.php/products');
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
