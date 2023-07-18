<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Origin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('DataMaster_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($fish_id = null)
    {
        $data['title'] = "Origin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fish'] = $this->db->get_where('fish', ['id' => $fish_id])->row();

        $origins = $this->db->get_where('origin', ['fish_id' => $fish_id])->result_array();
        $data['origins'] = $origins;

        $this->form_validation->set_rules('fish_id', 'fish', 'trim');


        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/origin', $data);
            $this->load->view('layouts/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('origin', [
                    'fish_id' => $fish_id,
                    'origin' => $this->input->post('origin'),
                ]);
                $this->session->set_flashdata('success', 'Origin Added!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Origin Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array(
                    'origin' => $this->input->post('origin'),
                );
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('origin', $data);
                
                $this->session->set_flashdata('success', 'Origin Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Origin Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('origin');
        
        $this->session->set_flashdata('success', 'Origin Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Origin Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
