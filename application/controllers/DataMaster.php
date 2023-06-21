<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('DataMaster_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = "Data Master";
		$data['dataMaster'] = $this->db->get_where('user_sub_menu',['menu_id' => 14])->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('data-master/index', $data);
		$this->load->view('layouts/footer');
	}

	
	public function konten()
	{
		$data['title'] = "Data Konten";
		$data['content'] = $this->db->get('content')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('header', 'Header', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('data-master/data-konten', $data);
			$this->load->view('layouts/footer');
		} else{
			$this->db->insert('content', [
				'header' => $this->input->post('header'),
				'content' => $this->input->post('content'),
				'footer' => $this->input->post('footer'),
				'last_updated' => date("Y-m-d h:i:sa")
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				New Content Added!
				</div>');
			redirect('DataMaster/konten');
		}
	}


	public function deleteKonten($id)
	{
		$this->db->delete('content', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Content Deleted!
			</div>');
		redirect('DataMaster/konten');
	}

	
	public function updateKonten()
	{
		$this->form_validation->set_rules('header', 'Header', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		if ($this->form_validation->run() == false) {
			redirect('DataMaster/konten');
		} else{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('content', [
				'header' => $this->input->post('header'),
				'content' => $this->input->post('content'),
				'footer' => $this->input->post('footer'),
				'last_updated' => date("Y-m-d h:i:sa")
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Content Updated!
				</div>');
			redirect('DataMaster/konten');
		}
	}
	
	public function dashboard()
	{
		$data['title'] = "Data Dashboard";
		$data['dashboard'] = $this->db->get('dashboard')->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('header', 'Header', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		$this->form_validation->set_rules('footer', 'Footer', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('data-master/data-dashboard', $data);
			$this->load->view('layouts/footer');
		} else{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('dashboard', [
				'header' => $this->input->post('header'),
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'footer' => $this->input->post('footer'),
				'icon' => $this->input->post('icon')
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Content Updated!
				</div>');
			redirect('DataMaster/dashboard');
		}
	}
	
	public function getUpdateKonten(){
		echo json_encode($this->DataMaster_model->getKontenById($this->input->post('id')));
	}
	
}