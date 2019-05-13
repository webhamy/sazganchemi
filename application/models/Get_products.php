<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_products extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_products($pId = 0)
    {
        if ($pId != 0) $this->db->where('products.id', $pId);
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('sub_products','products.id=sub_products.product_id','left');
        $query = $this->db->get();
        return $query;

    }
    function get($type = null)
    {
        if ($type != null) $this->db->where('product_type',$type);
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query;
    }
    function search_products($search)
    {
        $this->db->like('name', $search);
        $query = $this->db->get('products');
        return $query;

    }

    function insert_products()
    {
        $sql = "insert into orders VALUES('','" . $_POST['name'] . "','" . $_POST['type'] . "','" . $_POST['com_name'] . "','" . $_POST['pub_name'] . "','" . $_POST['chem_name'] . "','" . $_POST['effective_material'] . "','" . $_POST['hazard_class'] . "','" . $_POST['toxicity_degree'] . "','" . $_POST['antitoxin'] . "','" . $_POST['des'] . "','" . $_FILES['image']['name'] . "')";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            echo '<div class="text">درخواست شما با موفقیت درج شد </div>';
        } else {
            echo '<div class="text">مشکلی پیش آمده، دوباره سعی کنید</div>';
        }
//        echo '<script>setTimeout(function(){window.location=a' . base_url() . 'ccountd"},5000)</script>';
    }

}

?>
