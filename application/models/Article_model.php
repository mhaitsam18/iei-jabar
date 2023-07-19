<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
    public function getArticleLimit($limit = null, $start = null)
    {
        $this->db->where('id !=', 0);
        return $this->db->get('articles', $limit, $start)->result_array();
    }
}
