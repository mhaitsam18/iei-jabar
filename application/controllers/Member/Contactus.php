<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus extends CI_Controller
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
        $data['title'] = "Contact Us";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fishs'] = $this->db->get('fish')->result_array();
        $this->load->view('layouts/header-member', $data);
        $this->load->view('layouts/topbar-member', $data);
        $this->load->view('member/contact-us', $data);
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
