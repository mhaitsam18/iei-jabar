<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
    public function getArticleLimit($limit = null, $start = null)
    {
        $this->db->where('id !=', 0);
        // $this->db->select('articles.*, user.name');
        // $this->db->join('user', 'articles.author_id = user.id', 'left');
        $this->db->where('published_at IS NOT NULL');
        $this->db->where('deleted_at IS NULL');
        return $this->db->get('articles', $limit, $start)->result_array();
    }
}
