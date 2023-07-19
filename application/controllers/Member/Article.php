<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Article_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title'] = "Articles";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['articles'] = $this->pagination();
        $this->load->view('layouts/header-member', $data);
        $this->load->view('layouts/topbar-member', $data);
        $this->load->view('member/article', $data);
        $this->load->view('layouts/footer-member');
    }

    public function detail($article_id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->db->select('articles.*, user.name');
        $this->db->join('user', 'articles.author_id = user.id', 'left');
        $data['article'] = $this->db->get_where('articles', ['articles.id' => $article_id])->row_array();

        $this->db->join('user', 'comment.user_id = user.id', 'left');
        $data['comments'] = $this->db->get_where('comment', ['article_id' => $article_id])->result_array();
        $data['title'] = $data['article']['title'];
        $this->load->view('layouts/header-member', $data);
        $this->load->view('layouts/topbar-member', $data);
        $this->load->view('member/article-detail', $data);
        $this->load->view('layouts/footer-member');
    }

    public function comment()
    {
        $this->db->insert('comment', [
            'user_id' => $this->input->post('user_id'),
            'article_id' => $this->input->post('article_id'),
            'comment' => $this->input->post('comment'),
        ]);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function like()
    {
        // Periksa apakah pengguna sudah login dan user_id ada dalam session
        if ($this->session->userdata('email')) {
            $userId = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row()->id;

            // Lakukan validasi terhadap article_id dan user_id, misalnya periksa apakah article_id valid dan apakah user_id sudah melakukan like sebelumnya

            // Jika validasi sukses, masukkan data like ke dalam tabel likes

            $this->db->where('article_id', $this->input->post('article_id'));
            $this->db->where('user_id', $userId);
            $result = $this->db->get('likes');


            if ($result->num_rows() > 0) {
                $this->db->where('article_id', $this->input->post('article_id'));
                $this->db->where('user_id', $userId);
                $this->db->delete('likes');
            } else {
                $data = array(
                    'article_id' => $this->input->post('article_id'),
                    'user_id' => $userId
                );
                $this->db->insert('likes', $data);
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

    private function pagination()
    {
        $config['base_url'] = base_url('Member/article/index');
        $this->db->from('articles');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 4;
        $config['num_links'] = 1;

        //styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i data-feather="chevron-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i data-feather="chevron-left"></i>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        if (empty($this->uri->segment(4))) {
            $prev = '<li class="page-item disabled"><a class="page-link"><i data-feather="chevron-left"></i></a></li>';
            $next = '';
        } elseif ($config['total_rows'] - $this->uri->segment(4) < 4) {
            $prev = '';
            $next = '<li class="page-item disabled"><a class="page-link"><i data-feather="chevron-right"></i></a></li>';
        } else {
            $next = '';
            $prev = '';
        }

        $config['cur_tag_open'] = $prev . '<li class="page-item active" aria-current="page"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>' . $next;

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // $config['display_pages'] = TRUE;
        // $config['attributes']['rel'] = FALSE;
        $this->pagination->initialize($config);
        $start = $this->uri->segment(4);
        return $this->Article_model->getArticleLimit($config['per_page'], $start);
    }
}
