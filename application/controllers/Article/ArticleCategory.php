<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Articlecategory extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Article category";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article_categories'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('article_category', 'article_category', 'trim|required');

        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/article-category', $data);
            $this->load->view('layouts/footer');
        } else {

            if ($this->input->post('aksi') == "add") {
                $this->db->insert('article_category', [
                    'article_category' => $this->input->post('article_category')
                ]);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Article category Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'article_category' => $this->input->post('article_category')
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('article_category', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Article category Updated!
                    </div>');
            }


            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('article_category');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Article category Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
