<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fish extends CI_Controller
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
        $data['title'] = "Data Ikan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('fish.*, abundance.abundance, fish_type.type, species.species, genus.genus, families.family, ordo.ordo, class.class, phylums.phylum, kingdoms.kingdom');
        $this->db->join('species', 'fish.species_id = species.id', 'left');
        // , subspecies.subspecies
        // $this->db->join('subspecies', 'fish.subspecies_id = subspecies.id', 'left');
        $this->db->join('genus', 'species.genus_id = genus.id', 'left');
        $this->db->join('families', 'genus.family_id = families.id', 'left');
        $this->db->join('ordo', 'families.ordo_id = ordo.id', 'left');
        $this->db->join('class', 'ordo.class_id = class.id', 'left');
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $this->db->join('fish_type', 'fish.fish_type_id = fish_type.id', 'left');
        $this->db->join('abundance', 'fish.abundance_id = abundance.id', 'left');
        $data['fishs'] = $this->db->get_where('fish', ['fish.id !=' => 0])->result_array();
        // $data['subspeciess'] = $this->db->get('subspecies')->result_array();
        $data['speciess'] = $this->db->get('species')->result_array();
        $data['abundances'] = $this->db->get('abundance')->result_array();
        $data['fish_types'] = $this->db->get('fish_type')->result_array();
        
        $data['foods'] = $this->db->get('food')->result_array();
        $data['habitats'] = $this->db->get('habitats')->result_array();
        $data['distribution s'] = $this->db->get('distribution')->result_array();

        $this->form_validation->set_rules('fish', 'fish', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/fish', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('fish', [
                    'scientific_name' => $this->input->post('scientific_name'),
                    'genusl_name' => $this->input->post('genusl_name'),
                    'synonim' => $this->input->post('synonim'),
                    'species_id' => $this->input->post('species_id'),
                    // 'subspecies_id' => $this->input->post('subspecies_id'),
                    'fish_type_id' => $this->input->post('fish_type_id'),
                    'abundance_id' => $this->input->post('abundance_id'),
                    'length' => $this->input->post('length'),
                    'weight' => $this->input->post('weight'),
                    'information' => $this->input->post('information'),
                    'image' => $this->input->post('image'),
                ]);
                $fish_id = $this->db->insert_id();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New fish Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $upload_image = $_FILES['image']['name'];
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/fish';
                    $config['max_size']     = '4096';

                    // genuste random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('image', 'fish/' . $new_image);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = array(
                    'scientific_name' => $this->input->post('scientific_name'),
                    'genusl_name' => $this->input->post('genusl_name'),
                    'synonim' => $this->input->post('synonim'),
                    'species_id' => $this->input->post('species_id'),
                    // 'subspecies_id' => $this->input->post('subspecies_id'),
                    'fish_type_id' => $this->input->post('fish_type_id'),
                    'abundance_id' => $this->input->post('abundance_id'),
                    'length' => $this->input->post('length'),
                    'weight' => $this->input->post('weight'),
                    'information' => $this->input->post('information'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('fish', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                fish Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('fish');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        fish Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
