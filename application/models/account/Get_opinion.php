<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_opinion extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_opinion($UserID = 0)
    {
        if ($UserID != 0) $this->db->where('user_name', $UserID);
        $query = $this->db->get('requests');  //Perform query (you'll need to update to select what you actually want from you database)
        return $query;
    }

    function delete_opinion($UserID = 0)
    {
        $sql = "delete from requests where id=" . $UserID;
        $this->db->query($sql);
    }
}

?>
