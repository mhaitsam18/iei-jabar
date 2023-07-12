<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fish extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Member_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Fish Gallery";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fishs'] = $this->db->get('fish')->result_array();
        $this->load->view('layouts/header-member', $data);
        $this->load->view('layouts/topbar-member', $data);
        $this->load->view('member/gallery', $data);
        $this->load->view('layouts/footer-member');
    }
    
    public function detail($fish_id = null)
    {
        $data['title'] = "Fish Gallery";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('fish.*, abundance.abundance, fish_type.type, species.species, subspecies.subspecies, genus.genus, families.family, ordo.ordo, class.class, phylums.phylum, kingdoms.kingdom');
        $this->db->join('species', 'fish.species_id = species.id', 'left');
        $this->db->join('subspecies', 'fish.subspecies_id = subspecies.id', 'left');
        $this->db->join('genus', 'species.genus_id = genus.id', 'left');
        $this->db->join('families', 'genus.family_id = families.id', 'left');
        $this->db->join('ordo', 'families.ordo_id = ordo.id', 'left');
        $this->db->join('class', 'ordo.class_id = class.id', 'left');
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $this->db->join('fish_type', 'fish.fish_type_id = fish_type.id', 'left');
        $this->db->join('abundance', 'fish.abundance_id = abundance.id', 'left');
        $data['fish'] = $this->db->get_where('fish', ['fish.id' => $fish_id])->row_array();
        $data['foods'] = $this->db->get_where('fish_food', ['fish_id' => $fish_id])->result_array();
        $data['distributions'] = $this->db->get_where('fish_distribution', ['fish_id' => $fish_id])->result_array();
        $data['habitats'] = $this->db->get_where('fish_habitat', ['fish_id' => $fish_id])->result_array();
        $data['local_names'] = $this->db->get_where('local_name', ['fish_id' => $fish_id])->result_array();
        $data['origins'] = $this->db->get_where('origin', ['fish_id' => $fish_id])->result_array();
        $data['articles'] = $this->db->get_where('articles', ['fish_id' => $fish_id])->result_array();
        $this->load->view('layouts/header-member', $data);
        $this->load->view('layouts/topbar-member', $data);
        $this->load->view('member/fish-detail', $data);
        $this->load->view('layouts/footer-member');
    }

    public function like()
    {
        // Periksa apakah pengguna sudah login dan user_id ada dalam session
        if ($this->session->userdata('email')) {
            $userId = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row()->id;

            // Lakukan validasi terhadap fish_id dan user_id, misalnya periksa apakah fish_id valid dan apakah user_id sudah melakukan like sebelumnya

            // Jika validasi sukses, masukkan data like ke dalam tabel fish_like

            $this->db->where('fish_id', $this->input->post('fish_id'));
            $this->db->where('user_id', $userId);
            $result = $this->db->get('fish_like');


            if ($result->num_rows() > 0) {
                $this->db->where('fish_id', $this->input->post('fish_id'));
                $this->db->where('user_id', $userId);
                $this->db->delete('fish_like');
            } else {
                $data = array(
                    'fish_id' => $this->input->post('fish_id'),
                    'user_id' => $userId
                );
                $this->db->insert('fish_like', $data);
            }

            // Berikan respons sukses ke klien
            $response = array('status' => 'success', 'message' => 'successfully');
            echo json_encode($response);
        } else {
            // Jika pengguna tidak login, berikan respons gagal ke klien
            $response = array('status' => 'error', 'message' => 'User not logged in');
            echo json_encode($response);
        }
    }
}
