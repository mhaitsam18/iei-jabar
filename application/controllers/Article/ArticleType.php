<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArticleType extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Article Type";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article_types'] = $this->db->get('article_type')->result_array();

        $this->form_validation->set_rules('article_type', 'article_type', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/article-type', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('article_type', [
                    'article_type' => $this->input->post('article_type')
                ]);

                $this->session->set_flashdata('success', 'Articel Type Added!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Article Type Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'article_type' => $this->input->post('article_type')
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('article_type', $data);
                $this->session->set_flashdata('success', 'Article Type Updated!');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Article Type Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('article_type');
        $this->session->set_flashdata('success', 'Article Type Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Article Type Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
