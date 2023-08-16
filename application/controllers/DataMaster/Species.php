<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Species extends CI_Controller
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
        $data['title'] = "Species Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('species.*, genus.genus, families.family, ordo.ordo, class.class, phylums.phylum, kingdoms.kingdom');
        // , subgenus.subgenus
        // $this->db->join('subgenus', 'species.subgenus_id = subgenus.id', 'left');
        
        $this->db->join('genus', 'species.genus_id = genus.id', 'left');
        $this->db->join('families', 'genus.family_id = families.id', 'left');
        $this->db->join('ordo', 'families.ordo_id = ordo.id', 'left');
        $this->db->join('class', 'ordo.class_id = class.id', 'left');
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $data['speciess'] = $this->db->get_where('species', ['species.id !=' => 0])->result_array();

        $data['genera'] = $this->db->get('genus')->result_array();
        // $data['subgenera'] = $this->db->get('subgenus')->result_array();

        $this->form_validation->set_rules('species', 'species', 'trim|required');
        $this->form_validation->set_rules('general_name', 'general name', 'trim|required');
        $this->form_validation->set_rules('genus_id', 'genus', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/species', $data);
            $this->load->view('layouts/footer');
        } else {
            $genus_id = $this->input->post('genus_id');
            if (is_numeric($this->input->post('genus_id'))) {
                $genus = $this->db->get_where('genus', ['id' => $this->input->post('genus_id')])->num_rows();
                if ($genus > 0) {
                    $genus_id = $this->input->post('genus_id');
                } else {
                    $genus_id = 0;
                }
            } else {
                $this->db->insert('genus', [
                    'genus' => $this->input->post('genus_id')
                ]);
                $genus_id = $this->db->insert_id();
            }
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('species', [
                    'species' => $this->input->post('species'),
                    'general_name' => $this->input->post('general_name'),
                    'genus_id' => $genus_id,
                    // 'subgenus_id' => $this->input->post('subgenus_id'),
                    'description' => $this->input->post('description'),
                    'picture' => $this->input->post('picture')
                ]);
                $this->session->set_flashdata('success', 'Species Added!');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New species Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $upload_picture = $_FILES['picture']['name'];
                if ($upload_picture) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/species';
					$config['max_size'] = 3 * 1024; // Maksimal 3 MB dalam KB

                    // genuste random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('picture')) {
                        $new_picture = $this->upload->data('file_name');
                        $this->db->set('picture', 'species/' . $new_picture);
                    } else {

                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = array(
                    'species' => $this->input->post('species'),
                    'general_name' => $this->input->post('general_name'),
                    'genus_id' => $genus_id,
                    // 'subgenus_id' => $this->input->post('subgenus_id'),
                    'description' => $this->input->post('description'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('species', $data);
                
                $this->session->set_flashdata('success', 'Species Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                species Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('species');
        
        $this->session->set_flashdata('success', 'Species Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        species Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
