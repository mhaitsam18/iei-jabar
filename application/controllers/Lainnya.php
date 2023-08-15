<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lainnya extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('Lainnya_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = "Other feature";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/index', $data);
		$this->load->view('layouts/footer');
	}

	public function tentang()
	{
		$data['title'] = "About App";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/tentang', $data);
		$this->load->view('layouts/footer');
	}

	public function pengaturan()
	{
		$data['title'] = "Settings";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/pengaturan', $data);
		$this->load->view('layouts/footer');
	}

	public function hubungi()
	{
		$data['title'] = "Contact Us";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/hubungi-kami', $data);
		$this->load->view('layouts/footer');
	}

	public function bantuan()
	{
		$data['title'] = "Helo";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/bantuan', $data);
		$this->load->view('layouts/footer');
	}

	public function faq()
	{
		$data['title'] = "FAQ";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['konten'] = $this->db->get_where('content', ['id' => 1])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('lainnya/faq', $data);
		$this->load->view('layouts/footer');
	}

	
}
