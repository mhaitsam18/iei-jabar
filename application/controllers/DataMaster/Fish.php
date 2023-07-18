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
        
        $this->form_validation->set_rules('scientific_name', 'fish', 'trim|required');
        
        
        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/fish', $data);
            $this->load->view('layouts/footer');
        } else {
            $species_id = $this->input->post('species_id');
            if (is_numeric($this->input->post('species_id'))) {
                $species = $this->db->get_where('species', ['id' => $this->input->post('species_id')])->num_rows();
                if($species > 0){
                    $species_id = $this->input->post('species_id');
                } else {
                    $species_id = 0;
                }
            } else {
                $this->db->insert('species', [
                    'species' => $this->input->post('species_id')
                ]);
                $species_id = $this->db->insert_id();
            }
            // $food = $this->db->get_where('food', ['id' => $this->input->post('food_id')])->row();
            // $habitat = $this->db->get_where('habitats', ['id' => $this->input->post('habitat_id')])->row();
            // $distribution = $this->db->get_where('distribution', ['id' => $this->input->post('distribution_id')])->row();
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('fish', [
                    'scientific_name' => $this->input->post('scientific_name'),
                    'general_name' => $this->input->post('general_name'),
                    'synonim' => $this->input->post('synonim'),
                    'species_id' => $species_id,
                    // 'subspecies_id' => $this->input->post('subspecies_id'),
                    'fish_type_id' => $this->input->post('fish_type_id'),
                    'abundance_id' => $this->input->post('abundance_id'),
                    'length' => $this->input->post('length'),
                    'weight' => $this->input->post('weight'),
                    'information' => $this->input->post('information'),
                    'image' => $this->input->post('image'),
                ]);
                $fish_id = $this->db->insert_id();
                foreach ($this->input->post('food') as $key => $value) {
                    if (is_numeric($value)) {
                        $food = $this->db->get_where('food', ['id' => $value]);
                        if ($food->num_rows() > 0) {
                            $food_id = $food->row()->id;
                        } else {
                            $food_id = 0;
                        }
                    } else {
                        $this->db->insert('food', [
                            'food' => $value
                        ]);
                        $food_id = $this->db->insert_id();
                    }
                    $this->db->insert('fish_food',[
                        'fish_id' => $fish_id,
                        'food_id' => $food_id,
                    ]);
                }
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
                    $this->db->insert('fish_habitat',[
                        'fish_id' => $fish_id,
                        'habitat_id' => $habitat_id,
                    ]);
                }
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
                foreach ($this->input->post('local_name') as $key => $value) {
                    $this->db->insert('local_name', [
                        'fish_id' => $fish_id,
                        'local_name' => $value,
                    ]);
                }
                foreach ($this->input->post('origin') as $key => $value) {
                    $this->db->insert('origin', [
                        'fish_id' => $fish_id,
                        'origin' => $value,
                    ]);
                }
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
                    'general_name' => $this->input->post('general_name'),
                    'synonim' => $this->input->post('synonim'),
                    'species_id' => $species_id,
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
