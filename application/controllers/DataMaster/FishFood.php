<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FishFood extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('DataMaster_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index($fish_id = null)
    {
        $data['title'] = "Fish Food";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['fish'] = $this->db->get_where('fish', ['id' => $fish_id])->row();

        $this->db->select('fish_food.*, food.food');
        $this->db->join('food', 'fish_food.food_id = food.id');
        $fish_foods = $this->db->get_where('fish_food', ['fish_id' => $fish_id])->result_array();
        $data['fish_foods'] = $fish_foods;

        $food_id = [];
        foreach ($fish_foods as $fish_food) {
            $food_id[] = $fish_food['food_id'];
        }
        if($food_id){
            $this->db->where_not_in('id', $food_id);
        }
        $data['foods'] = $this->db->get('food')->result_array();

        $this->form_validation->set_rules('fish_id', 'fish', 'trim');


        if ($this->form_validation->run() == false) {
            // $this->index();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('data-master/fish-food', $data);
            $this->load->view('layouts/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                foreach ($this->input->post('food') as $key => $value) {
                    if (is_numeric($value)) {
                        $food = $this->db->get_where('food', ['id' => $value]);
                        if ($food->num_rows() > 0) {
                            $food_id = $food->row()->id;
                        } else {
                            $food_id = 0;
                        }
                    } else {
                        $this->db->insert('food', [
                            'food' => $value
                        ]);
                        $food_id = $this->db->insert_id();
                    }
                    $this->db->insert('fish_food', [
                        'fish_id' => $fish_id,
                        'food_id' => $food_id,
                    ]);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New fish food Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {

                $data = array(
                    'food_id' => $this->input->post('food_id'),
                );

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('fish_food', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                fish food Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('fish_food');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        fish food Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
