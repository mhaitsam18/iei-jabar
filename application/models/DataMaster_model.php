<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMaster_model extends CI_Model
{

	public function getAgamaById($id)
	{
		return $this->db->get_where('agama', ['id_agama' => $id])->row_array();
	}
	public function getKontenById($id)
	{
		return $this->db->get_where('content', ['id_content' => $id])->row_array();
	}
	public function getkurirById($id)
	{
		return $this->db->get_where('kurir', ['id_kurir' => $id])->row_array();
	}
	public function getKategoriById($id)
	{
		return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
	}
	public function getMetodeBayarById($id)
	{
		return $this->db->get_where('metode_bayar', ['id_metode_bayar' => $id])->row_array();
	}
	public function getRekeningById($id)
	{
		return $this->db->get_where('rekening', ['id_rekening' => $id])->row_array();
	}

	public function getBenuaById($id)
	{
		return $this->db->get_where('continent', ['id' => $id])->row_array();
	}

	public function getNegara()
	{
		$this->db->select('*, country.id as ct_id, continent.id as ctn_id');
		$this->db->from('continent');
		$this->db->join('country', 'continent.id = country.continent_id');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getProvinsi()
	{
		$this->db->select('*, country.id as ct_id, provinsi.id as pr_id');
		$this->db->from('provinsi');
		$this->db->join('country', 'country.id = provinsi.country_id');
		$query = $this->db->get();

		return $query->result_array();
	}
}
