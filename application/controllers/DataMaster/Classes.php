<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classes extends CI_Controller
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
        $data['title'] = "Class Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('class.*, phylums.phylum, kingdoms.kingdom');
        //  subphylum.subphylum, infraphylum.infraphylum, superclass.superclass,
        // $this->db->join('subphylum', 'class.subphylum_id = subphylum.id', 'left');
        // $this->db->join('infraphylum', 'class.infraphylum_id = infraphylum.id', 'left');
        // $this->db->join('superclass', 'class.superclass_id = superclass.id', 'left');
        
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $data['classes'] = $this->db->get_where('class', ['class.id !=' => 0])->result_array();
        
        $data['phylums'] = $this->db->get('phylums')->result_array();
        // $data['subphylums'] = $this->db->get('subphylum')->result_array();
        // $data['infraphylums'] = $this->db->get('infraphylum')->result_array();
        // $data['superclasses'] = $this->db->get('superclass')->result_array();

        $this->form_validation->set_rules('class', 'class', 'trim|required');
        $this->form_validation->set_rules('general_name', 'general name', 'trim|required');
        $this->form_validation->set_rules('phylum_id', 'Phylum', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('species', 'Species', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/class', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('class', [
                    'class' => $this->input->post('class'),
                    'general_name' => $this->input->post('general_name'),
                    'phylum_id' => $this->input->post('phylum_id'),
                    // 'subphylyum_id' => $this->input->post('subphylyum_id'),
                    // 'infraphylum_id' => $this->input->post('infraphylum_id'),
                    // 'superclass_id' => $this->input->post('superclass_id'),
                    'description' => $this->input->post('description'),
                    'picture' => $this->input->post('picture'),
                    'species' => $this->input->post('species')
                ]);
                $this->session->set_flashdata('success', 'Class Added!');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New class Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $upload_picture = $_FILES['picture']['name'];
                if ($upload_picture) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/class';
                    $config['max_size']     = '4096';

                    // Generate random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('picture')) {
                        $new_picture = $this->upload->data('file_name');
                        $this->db->set('picture', 'class/'.$new_picture);
                    } else {
                        
                $this->session->set_flashdata('error', $this->upload->display_errors());
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = [
                    'class' => $this->input->post('class'),
                    'general_name' => $this->input->post('general_name'),
                    'phylum_id' => $this->input->post('phylum_id'),
                    // 'subphylum_id' => $this->input->post('subphylum_id'),
                    // 'infraphylum_id' => $this->input->post('infraphylum_id'),
                    // 'superclass_id' => $this->input->post('superclass_id'),
                    'description' => $this->input->post('description'),
                    'species' => $this->input->post('species')
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('class', $data);
                
                $this->session->set_flashdata('success', 'Class Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                class Updated!
                    </div>');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('class');
        
        $this->session->set_flashdata('success', 'Class Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        class Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
