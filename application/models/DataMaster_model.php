<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMaster_model extends CI_Model
{

	public function getBenuaById($id)
	{
		return $this->db->get_where('continent', ['id' => $id])->row_array();
	}

	public function getNegara()
	{
		$this->db->select('*, country.id as ct_id, continent.id as ctn_id');
		$this->db->where('continent.id !=', 0);
		$this->db->from('continent');
		$this->db->join('country', 'continent.id = country.continent_id');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getProvinsi()
	{
		$this->db->select('*, country.id as ct_id, province.id as pr_id');
		$this->db->where('province.id !=', 0);
		$this->db->from('province');
		$this->db->join('country', 'country.id = province.country_id');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getKepulauan()
	{
		$this->db->select('*, province.id as pr_id, archipelago.id as ar_id, distribution.id as d_id');
		$this->db->from('archipelago');
		$this->db->where('archipelago.id !=', 0);
		$this->db->join('province', 'archipelago.province_id = province.id');
		$this->db->join('distribution', 'archipelago.distribution_id = distribution.id');
		$query = $this->db->get();

		return $query->result_array();
	}
}
