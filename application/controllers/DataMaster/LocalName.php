<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LocalName extends CI_Controller
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
        $data['title'] = "Local Name";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fish'] = $this->db->get_where('fish', ['id' => $fish_id])->row();
        
        $local_names = $this->db->get_where('local_name', ['fish_id' => $fish_id])->result_array();
        $data['local_names'] = $local_names;

        $this->form_validation->set_rules('fish_id', 'fish', 'trim');
        $this->form_validation->set_rules('local_name', 'local name', 'trim');
        $this->form_validation->set_rules('area', 'area', 'trim');


        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/local-name', $data);
            $this->load->view('layouts/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('local_name', [
                    'fish_id' => $fish_id,
                    'local_name' => $this->input->post('local_name'),
                    'area' => $this->input->post('area'),
                ]);
                $this->session->set_flashdata('success', 'Local Name Added!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Local Name Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array(
                    'local_name' => $this->input->post('local_name'),
                    'area' => $this->input->post('area'),
                );
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('local_name', $data);
                
                $this->session->set_flashdata('success', 'Local Name Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Local Name Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('local_name');
        
        $this->session->set_flashdata('success', 'Local Name Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Local Name Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
