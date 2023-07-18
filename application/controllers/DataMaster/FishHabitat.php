<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FishHabitat extends CI_Controller
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
        $data['title'] = "Fish habitat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fish'] = $this->db->get_where('fish', ['id' => $fish_id])->row();

        $this->db->select('fish_habitat.*, habitat.habitat');
        $this->db->join('habitat', 'fish_habitat.habitat_id = habitat.id');
        $fish_habitats = $this->db->get_where('fish_habitat', ['fish_id' => $fish_id])->result_array();
        $data['fish_habitats'] = $fish_habitats;

        $habitat_id = [];
        foreach ($fish_habitats as $fish_habitat) {
            $habitat_id[] = $fish_habitat['habitat_id'];
        }
        if ($habitat_id) {
            $this->db->where_not_in('id', $habitat_id);
        }
        $data['habitats'] = $this->db->get('habitats')->result_array();

        $this->form_validation->set_rules('fish_id', 'fish', 'trim');


        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/fish-habitat', $data);
            $this->load->view('layouts/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                foreach ($this->input->post('habitat') as $key => $value) {
                    if (is_numeric($value)) {
                        $habitat = $this->db->get_where('habitats', ['id' => $value]);
                        if ($habitat->num_rows() > 0) {
                            $habitat_id = $habitat->row()->id;
                        } else {
                            $habitat_id = 0;
                        }
                    } else {
                        $this->db->insert('habitats', [
                            'habitat' => $value
                        ]);
                        $habitat_id = $this->db->insert_id();
                    }
                    $this->db->insert('fish_habitat', [
                        'fish_id' => $fish_id,
                        'habitat_id' => $habitat_id,
                    ]);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New fish habitat Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array(
                    'habitat_id' => $this->input->post('habitat_id'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('fish_habitat', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                fish habitat Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('fish_habitat');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        fish habitat Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
