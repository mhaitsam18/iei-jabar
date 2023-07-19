<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$this->load->model('User_model');
		$this->load->model('DataMaster_model');
		$this->load->model('Menu_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['speciess'] = $this->db->get('species')->result_array();
		$data['genera'] = $this->db->get('genus')->result_array();
		$data['families'] = $this->db->get('families')->result_array();
		$data['ordos'] = $this->db->get('ordo')->result_array();
		$data['classies'] = $this->db->get('class')->result_array();
		$data['phylums'] = $this->db->get('phylums')->result_array();
		$data['kingdoms'] = $this->db->get('kingdoms')->result_array();
		$data['kingdoms'] = $this->db->get('kingdoms')->result_array();
		$data['continents'] = $this->db->get('continent')->result_array();
		$data['countries'] = $this->db->get('country')->result_array();
		$data['provinces'] = $this->db->get('province')->result_array();
		$data['distributions'] = $this->db->get('distribution')->result_array();
		$data['archipelagos'] = $this->db->get('archipelago')->result_array();
		$data['fish_types'] = $this->db->get('fish_type')->result_array();
		$data['foods'] = $this->db->get('food')->result_array();
		$data['habitats'] = $this->db->get('habitats')->result_array();
		$data['fishs'] = $this->db->get('fish')->result_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('layouts/footer');
	}

	public function role()
	{
		$data['title'] = "Role Management";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('layouts/footer');
		} else{
			$this->db->insert('user_role', ['role' => $this->input->post('role')]);

			$this->session->set_flashdata('success', 'Role Added!');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				New Role Added!
				</div>');
			redirect('admin/role');
		}
	}

	public function dataUser()
	{
		$data['title'] = "Data User";
		$data['role'] = $this->db->get('user_role')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->select('*, user_role.id AS rid, user.id AS uid');
		$this->db->from('user');
		$this->db->join('user_role', 'user_role.id = user.role_id');
		$this->db->where('user.id !=', 0);
		$data['user_data'] = $this->db->get()->result_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('admin/data-user', $data);
		$this->load->view('layouts/footer');
	}

	public function setRole()
	{
		$this->db->set('role_id', $this->input->post('role_id'));
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user');
		// $input = array('role_id' => $this->input->post('role_id'));
		// $id = $this->input->post('id');
		// $this->User_model->update()

		$this->session->set_flashdata('success', 'Set User Role successfull!');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Set User Role Successfull!
			</div>');
		redirect('admin/dataUser');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = "Role Access";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('layouts/footer');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else{
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('success', 'Access Changed!');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Access Changed!
			</div>');
	}

	public function getUpdateRole(){
		echo json_encode($this->Admin_model->getRoleById($this->input->post('id')));
	}
	public function getUserData(){
		echo json_encode($this->Admin_model->getUserById($this->input->post('id')));
	}
	public function updateRole(){
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		if ($this->form_validation->run() == false) {
			redirect('admin/role');
		} else{
			$data = array('role' => $this->input->post('role'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('user_role', $data);

			$this->session->set_flashdata('success', 'Role Updated!');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Role Updated!
				</div>');
			redirect('admin/role');
		}
	}

	public function deleteRole($id)
	{
		$this->db->where('role_id', $id);
		$this->db->delete('user');

		$this->db->where('role_id', $id);
		$this->db->delete('user_access_menu');
		
		$this->db->where('id', $id);
		$this->db->delete('user_role');

		$this->session->set_flashdata('success', 'Role Deleted!');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Role Deleted!
			</div>');
		redirect('admin/role');
	}

}