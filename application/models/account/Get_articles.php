<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_articles extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_articles()
    {
        $query = $this->db->get('posts');
        return $query;
    }

    function delete_articles($ID = 0)
    {
        $sql = "delete from products where id=" . $ID;
        $this->db->query($sql);
    }
    function get($type = null)
    {
        if ($type != null) $this->db->where('post_type',$type);
        $query = $this->db->get('posts');
        return $query;
    }
}

?>
