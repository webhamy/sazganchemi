<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_graph extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_graph()
    {
        $result = array();
        $this->db->where('user_type', '1');
        $this->db->from('user');
        $result['user'] = $this->db->count_all_results();

        $this->db->from('orders');
        $result['order'] = $this->db->count_all_results();

        $this->db->select('sum(price) as sum ');
        $this->db->from('orders');

        $result['sum'] = $this->db->get()->result_array();
        return $result;
    }
}

?>
