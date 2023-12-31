<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Distribution extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('DataMaster_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Distribution Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['distributions'] = $this->db->get_where('distribution', ['id !=' => 0])->result_array();
        $this->form_validation->set_rules('distribution', 'Distribution', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/distribution', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('distribution', ['distribution' => $this->input->post('distribution')]);
                $this->session->set_flashdata('success', 'Distribution Added!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Distribution Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array('distribution' => $this->input->post('distribution'));

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('distribution', $data);
                
                $this->session->set_flashdata('success', 'Distribution Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Distribution Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('distribution');
        
        $this->session->set_flashdata('success', 'Distribution Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Distribution Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
