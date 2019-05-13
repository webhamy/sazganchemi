<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_users extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_users($UserID = 0)
    {
        $sql1 = '';
        if ($UserID != 0) $sql1 = " and id=" . $UserID;
        $sql = "select * from user where user_type='1' " . $sql1;
        $query = $this->db->query($sql);
        return $query;
    }

    function delete_users($UserID = 0)
    {
        $sql = "delete from user where id=" . $UserID;
        $this->db->query($sql);
    }
}

?>
