<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Menu_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Article Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*, articles.id as article_id');
        $this->db->join('user', 'user.id = articles.author_id');
        $data['artikel'] = $this->db->get_where('articles', [
            'author_id' => $data['user']['id']
        ])->result_array();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('layouts/topbar', $data);
        $this->load->view('article/index', $data);
        $this->load->view('layouts/footer');
    }
    
    public function show($article_id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->join('user', 'user.id = articles.author_id');
        $data['article'] = $this->db->get_where('articles', ['articles.id' => $article_id])->row_array();

        $this->db->join('user', 'comment.user_id = user.id', 'left');
        $data['comments'] = $this->db->get_where('comment', ['article_id' => $article_id])->result_array();
        $data['title'] = $data['article']['title'];
        
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('layouts/topbar', $data);
        $this->load->view('article/show', $data);
        $this->load->view('layouts/footer');
    }
    
    public function create()
    {
        $data['title'] = "Tambah Artikel";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article_types'] = $this->db->get('article_type')->result();
        $data['article_categories'] = $this->db->get('article_category')->result();
        $data['fishs'] = $this->db->get('fish')->result();
    
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('excerpt', 'excerpt', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|required');
        $this->form_validation->set_rules('slug', 'slug', 'trim|required|is_unique[articles.slug]');
        // $this->form_validation->set_rules('article_category_id', 'article_category_id', 'trim|required');
        // $this->form_validation->set_rules('article_type_id', 'article_type_id', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('article/create', $data);
            $this->load->view('layouts/footer');
        } else {
            if (isset($_FILES['thumbnail']['name'])) {
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['upload_path'] = './assets/img/artikel';
                $config['max_size']     = '180000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('thumbnail')) {
                    $nama_thumbnail = 'artikel/'.$this->upload->data('file_name');
                }
            } else {
                $nama_thumbnail = 'artikel/'. $this->input->post('nama_thumbnail');
            }
            $published_at = null;
            if ($this->input->post('published_at')) {
                $published_at = date('Y-m-d H:i:s');
            }
            $this->db->insert('articles', [
                'title' => $this->input->post('title'),
                'excerpt' => $this->input->post('excerpt'),
                'content' => $this->input->post('content'),
                'slug' => $this->input->post('slug'),
                'fish_id' => $this->input->post('fish_id'),
                'thumbnail' => $nama_thumbnail,
                'author_id' => $data['user']['id'],
                'published_at' => $published_at,
                'article_category_id' => $this->input->post('article_category_id'),
                'article_type_id' => $this->input->post('article_type_id'),
            ]);

            $this->session->set_flashdata('success', 'Article Added!');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Article Added!
				</div>');
            redirect('Artikel/index');
        }
    }
    public function edit($article_id = null)
    {
        $data['title'] = "Edit Artikel";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article_types'] = $this->db->get('article_type')->result();
        $data['article_categories'] = $this->db->get('article_category')->result();
        $data['fishs'] = $this->db->get('fish')->result();
        $article = $this->db->get_where('articles', ['articles.id' => $article_id])->row();
        $data['article'] = $article;
    
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('excerpt', 'excerpt', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|required');
        if ($this->input->post('slug') != $article->slug) {
            $this->form_validation->set_rules('slug', 'slug', 'trim|required|is_unique[articles.slug]');
        }
        // $this->form_validation->set_rules('article_category_id', 'article_category_id', 'trim|required');
        // $this->form_validation->set_rules('article_type_id', 'article_type_id', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('article/edit', $data);
            $this->load->view('layouts/footer');
        } else {
            if (isset($_FILES['thumbnail']['name'])) {
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['upload_path'] = './assets/img/artikel';
                $config['max_size']     = '180000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('thumbnail')) {
                    $nama_thumbnail = 'artikel/'.$this->upload->data('file_name');
                }
            } else {
                $nama_thumbnail = 'artikel/'. $this->input->post('nama_thumbnail');
            }
            $published_at = null;
            if ($this->input->post('published_at')) {
                $published_at = date('Y-m-d H:i:s');
            }
            $this->db->where('id', $article_id);
            $this->db->update('articles', [
                'title' => $this->input->post('title'),
                'excerpt' => $this->input->post('excerpt'),
                'content' => $this->input->post('content'),
                'slug' => $this->input->post('slug'),
                'fish_id' => $this->input->post('fish_id'),
                'thumbnail' => $nama_thumbnail,
                'published_at' => $published_at,
                'article_category_id' => $this->input->post('article_category_id'),
                'article_type_id' => $this->input->post('article_type_id'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $this->session->set_flashdata('success', 'Article Updated!');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Article Updated!
				</div>');
            redirect('Artikel/index');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');

        $this->session->set_flashdata('success', 'Article Deleted!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Article Deleted!
			</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function publish($article_id = null, $publish = null)
    {
        $this->db->where('id', $article_id);
        $data = [];
        if ($publish == 'draft') {
            $data = [
                'published_at' => null,
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ];
        } elseif ($publish == 'publish') {
            $data = [
                'published_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ];
        } elseif ($publish == 'unpublish') {
            $data = [
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => date('Y-m-d H:i:s'),
            ];
        }
        $this->db->update('articles', $data);

        $this->session->set_flashdata('success', 'Article Updated!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Article deleted!
				</div>');
        redirect('Artikel/index');
    }
    
}
