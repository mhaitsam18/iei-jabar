<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fishdistribution extends CI_Controller
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
        $data['title'] = "Fish distribution";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fish'] = $this->db->get_where('fish', ['id' => $fish_id])->row();

        $this->db->select('fish_distribution.*, distribution.distribution');
        $this->db->join('distribution', 'fish_distribution.distribution_id = distribution.id');
        $fish_distributions = $this->db->get_where('fish_distribution', ['fish_id' => $fish_id])->result_array();
        $data['fish_distributions'] = $fish_distributions;

        $distribution_id = [];
        foreach ($fish_distributions as $fish_distribution) {
            $distribution_id[] = $fish_distribution['distribution_id'];
        }
        if ($distribution_id) {
            $this->db->where_not_in('id', $distribution_id);
        }
        $data['distributions'] = $this->db->get('distribution')->result_array();

        $this->form_validation->set_rules('fish_id', 'fish', 'trim');


        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/fish-distribution', $data);
            $this->load->view('layouts/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                foreach ($this->input->post('distribution') as $key => $value) {
                    if (is_numeric($value)) {
                        $distribution = $this->db->get_where('distribution', ['id' => $value]);
                        if ($distribution->num_rows() > 0) {
                            $distribution_id = $distribution->row()->id;
                        } else {
                            $distribution_id = 0;
                        }
                    } else {
                        $this->db->insert('distribution', [
                            'distribution' => $value
                        ]);
                        $distribution_id = $this->db->insert_id();
                    }
                    $this->db->insert('fish_distribution', [
                        'fish_id' => $fish_id,
                        'distribution_id' => $distribution_id,
                    ]);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New fish distribution Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array(
                    'distribution_id' => $this->input->post('distribution_id'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('fish_distribution', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                fish distribution Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('fish_distribution');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        fish distribution Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
