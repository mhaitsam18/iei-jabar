<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fish_model');
	}

	public function index()
	{
		$data['title'] = "Fish Gallery";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['fish_types'] = $this->db->get('fish_type')->result_array();

		$data['fish_list'] = $this->Fish_model->get_fish_list();
		$data['fish_list2'] = $this->Fish_model->get_fish_list2();
		$this->load->view('layouts/header-member', $data);
		$this->load->view('layouts/topbar-member', $data);
		$this->load->view('gallery', $data);
		$this->load->view('layouts/footer-member');
	}
}
