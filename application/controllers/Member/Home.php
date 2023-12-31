<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		// is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('Member_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->limit(10);
		$data['fishs'] = $this->db->get_where('fish', ['id !=' => 0])->result_array();
		$data['articles'] = $this->db->get_where('articles', ['id !=' => 0])->result_array();
		$this->load->view('layouts/header-member', $data);
		$this->load->view('layouts/topbar-member', $data);
		$this->load->view('member/index', $data);
		$this->load->view('layouts/footer-member');
	}

	
}
