<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_articles extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_articles($pId = 0)
    {
        if ($pId != 0) $this->db->where('id', $pId);
        $query = $this->db->get('posts');
        return $query;
    }
    function get($type = null)
    {
        if ($type != null) $this->db->where('post_type',$type);
        $query = $this->db->get('posts');
        return $query;
    }
    function getlast()
    {
        $this->db->where('post_type',5);
        $query = $this->db->order_by('id',"desc")
		->limit(5)
    ->get('posts');
        return $query;
    }

    function search_products($search)
    {
        $this->db->like('name', $search);
        $query = $this->db->order_by('id',"desc")
		->limit(2)
    ->get('products');
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
