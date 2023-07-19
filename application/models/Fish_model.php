<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fish_model extends CI_Model
{
    public function getFishLimit($limit = null, $start = null)
    {
        $this->db->where('id !=', 0);
        return $this->db->get('fish', $limit, $start)->result_array();
    }
}
