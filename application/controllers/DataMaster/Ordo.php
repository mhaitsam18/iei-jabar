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
        $data['title'] = "Order Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('ordo.*, class.class, phylums.phylum, kingdoms.kingdom');
        // , subclass.subclass
        // $this->db->join('subclass', 'ordo.subclass_id = subclass.id', 'left');
        
        $this->db->join('class', 'ordo.class_id = class.id', 'left');   
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $data['ordos'] = $this->db->get_where('ordo', ['ordo.id !=' => 0])->result_array();
        
        $data['classes'] = $this->db->get('class')->result_array();
        // $data['subclasses'] = $this->db->get('subclass')->result_array();

        $this->form_validation->set_rules('ordo', 'ordo', 'trim|required');
        $this->form_validation->set_rules('general_name', 'general name', 'trim|required');
        $this->form_validation->set_rules('class_id', 'class', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/ordo', $data);
            $this->load->view('layouts/footer');
        } else {
            $class_id = $this->input->post('class_id');
            if (is_numeric($this->input->post('class_id'))) {
                $class = $this->db->get_where('class', ['id' => $this->input->post('class_id')])->num_rows();
                if ($class > 0) {
                    $class_id = $this->input->post('class_id');
                } else {
                    $class_id = 0;
                }
            } else {
                $this->db->insert('class', [
                    'class' => $this->input->post('class_id')
                ]);
                $class_id = $this->db->insert_id();
            }
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('ordo', [
                    'ordo' => $this->input->post('ordo'),
                    'general_name' => $this->input->post('general_name'),
                    'class_id' => $class_id,
                    // 'subclass_id' => $this->input->post('subclass_id'),
                    'description' => $this->input->post('description'),
                    'picture' => $this->input->post('picture')
                ]);
                $this->session->set_flashdata('success', 'Ordo Added!');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New order Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {



                $upload_picture = $_FILES['picture']['name'];
                if ($upload_picture) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/ordo';
					$config['max_size'] = 3 * 1024; // Maksimal 3 MB dalam KB

                    // Generate random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('picture')) {
                        $new_picture = $this->upload->data('file_name');
                        $this->db->set('picture', 'ordo/' . $new_picture);
                    } else {

                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = array(
                    'ordo' => $this->input->post('ordo'),
                    'general_name' => $this->input->post('general_name'),
                    'class_id' => $class_id,
                    // 'subclass_id' => $this->input->post('subclass_id'),
                    'description' => $this->input->post('description'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('ordo', $data);
                
                $this->session->set_flashdata('success', 'Ordo Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                order Updated!
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
        
        $this->session->set_flashdata('success', 'Ordo Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        order Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
