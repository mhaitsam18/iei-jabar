<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Genus extends CI_Controller
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
        $data['title'] = "Data genus";
        $data['dataMaster'] = $this->db->get_where('user_sub_menu', ['menu_id' => 14])->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('genus.*, subfamily.subfamily, families.family, order.order, class.classify, phylums.phylum, kingdoms.kingdom');
        $this->db->join('subfamily', 'genus.subfamily_id = subfamily.id', 'left');

        $this->db->join('families', 'genus.family_id = families.id', 'left');
        $this->db->join('order', 'families.order_id = order.id', 'left');
        $this->db->join('class', 'order.classify_id = class.id', 'left');
        $this->db->join('phylums', 'class.phylum_id = phylums.id', 'left');
        $this->db->join('kingdoms', 'phylums.kingdom_id = kingdoms.id', 'left');
        $data['genera'] = $this->db->get('genus')->result_array();

        $data['families'] = $this->db->get('families')->result_array();
        $data['subfamilies'] = $this->db->get('subfamily')->result_array();

        $this->form_validation->set_rules('genus', 'genus', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/genus', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('genus', [
                    'genus' => $this->input->post('genus'),
                    'genusl_name' => $this->input->post('genusl_name'),
                    'family_id' => $this->input->post('family_id'),
                    'subfamily_id' => $this->input->post('subfamily_id'),
                    'description' => $this->input->post('description'),
                    'picture' => $this->input->post('picture')
                ]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New genus Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $upload_picture = $_FILES['picture']['name'];
                if ($upload_picture) {
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                    $config['upload_path'] = './assets/img/genus';
                    $config['max_size']     = '4096';

                    // genuste random file name
                    $config['file_name'] = uniqid();
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('picture')) {
                        $new_picture = $this->upload->data('file_name');
                        $this->db->set('picture', 'genus/' . $new_picture);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                }

                $data = array(
                    'genus' => $this->input->post('genus'),
                    'genusl_name' => $this->input->post('genusl_name'),
                    'family_id' => $this->input->post('family_id'),
                    'subfamily_id' => $this->input->post('subfamily_id'),
                    'description' => $this->input->post('description'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('genus', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                genus Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('genus');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        genus Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
