<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fish_model extends CI_Model
{

	public function get_fish_list()
	{
		$this->db->order_by('scientific_name', 'asc');
		$this->db->where('scientific_name !=', 'undefined');
		$fish_list = $this->db->get('fish')->result_array();
		return $fish_list;
	}
	public function get_fish_list2()
	{
		$this->db->order_by('general_name', 'asc');
		$this->db->where('general_name !=', '-');
		$this->db->where('general_name !=', 'undefined');
		$fish_list = $this->db->get('fish')->result_array();
		return $fish_list;
	}

    public function getFishLimit($limit = null, $start = null)
    {
        $this->db->where('id !=', 0);
        return $this->db->get('fish', $limit, $start)->result_array();
    }
}
