<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_products extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_products()
    {
        $query = $this->db->get('products');
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
    function delete_products($UserID = 0)
    {
      $sql = "delete from sub_products where product_id=" . $UserID;
      $this->db->query($sql);
      $sql2 = "delete from products where id=" . $UserID;
        $this->db->query($sql2);
    }
}

?>
