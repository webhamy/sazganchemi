<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_orders extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_orders($UserID = 0)
    {
        if ($UserID != 0) $this->db->where('UserId', $UserID);
        $query = $this->db->get('orders');
        return $query;
    }
}

?>
