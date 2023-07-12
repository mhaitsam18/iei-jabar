<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ordo extends CI_Controller
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
        $data['title'] = "Data Ordo";
        $data['dataMaster'] = $this->db->get_where('user_sub_menu', ['menu_id' => 14])->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('ordo.*, classifies.classify, subclass.subclass, phylums.phylum, kingdoms.kingdom');
        $this->db->join('subclass', 'ordo.subclass_id = subclass.id', 'left');
        
        $this->db->join('classifies', 'ordo.classify_id = classifies.id', 'left');   
        $this->db->join('phylums', 'classifies.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $data['ordos'] = $this->db->get('ordo')->result_array();
        
        $data['classifies'] = $this->db->get('classifies')->result_array();
        $data['subclassifies'] = $this->db->get('subclass')->result_array();

        $this->form_validation->set_rules('ordo', 'ordo', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/ordo', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('ordo', [
                    'ordo' => $this->input->post('ordo'),
                    'general_name' => $this->input->post('general_name'),
                    'classify_id' => $this->input->post('classify_id'),
                    'subclass_id' => $this->input->post('subclass_id'),
                    'description' => $this->input->post('description'),
                    'picture' => $this->input->post('picture')
                ]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New ordo Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {



                $upload_picture = $_FILES['picture']['name'];
                if ($upload_picture) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/ordo';
                    $config['max_size']     = '4096';

                    // Generate random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('picture')) {
                        $new_picture = $this->upload->data('file_name');
                        $this->db->set('picture', 'ordo/' . $new_picture);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = array(
                    'ordo' => $this->input->post('ordo'),
                    'general_name' => $this->input->post('general_name'),
                    'classify_id' => $this->input->post('classify_id'),
                    'subclass_id' => $this->input->post('subclass_id'),
                    'description' => $this->input->post('description'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('ordo', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                ordo Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ordo');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        ordo Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}