<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()
    {
        $data['title'] = "Profile";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['avatars'] = $this->db->get('avatar')->result_array();
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        // $this->form_validation->set_rules('place_of_birth', 'Place of birth', 'trim|required');
        $this->form_validation->set_rules('birthday', 'Birth day', 'trim|required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('Address', 'Address', 'trim|required');
        if ($this->form_validation->run() ==  false) {
            $this->load->view('layouts/header-member', $data);
            $this->load->view('layouts/topbar-member', $data);
            $this->load->view('member/profile', $data);
            $this->load->view('layouts/footer-member');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $username = $this->input->post('username');

            //jika ada gambar
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['upload_path'] = './assets/img/profile';
				$config['max_size'] = 3 * 1024; // Maksimal 3 MB dalam KB
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg' || $old_image != 'default.svg' || $old_image != 'default.png') {
                        // unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = 'profile/' . $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('member/user');
                }
            }

            $data = [
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                // 'place_of_birth' => $this->input->post('place_of_birth'),
                'birthday' => $this->input->post('birthday'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address')
            ];
            $this->db->where('email', $email);
            $this->db->update('user', $data);
            // $this->session->set_flashdata('flash', 'Berhasil diubah');
            $this->session->set_flashdata('success', 'Profile Updated!');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Congratulation, your profile updated
				</div>');
            redirect('member/user');
        }
    }

    public function changeAvatar()
    {
        $this->db->where('id', $this->input->post('user_id'));
        $this->db->update('user',['image' => $this->input->post('avatar')]);
        $this->session->set_flashdata('success', 'Profile Updated!');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Profile Updated
				</div>');
        redirect('member/user');
    }

    public function delete()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() ==  false) {
            // $this->session->set_flashdata('flash_gagal', 'Kata sandi wajib diisi');
            $this->session->set_flashdata('error', 'Password is required!');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				The Password is required.
				</div>');
            redirect('member/user');
        } else {
            $email = $this->session->userdata('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            $id = $user['id'];

            if (password_verify($password, $user['password'])) {
                $this->db->delete('user', ['id' => $id]);
                redirect('auth/logout');
            } else {
                $this->session->set_flashdata('flash_gagal', 'Wrong Password');
                $this->session->set_flashdata('error', 'Wrong Password!');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong Password!
					</div>');
                redirect('member/user');
            }
        }
    }

    public function changePassword()
    {

        $data['title'] = "Change Password";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('new_password1', 'New Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('new_password2', 'Repeat New Password', 'trim|required|matches[new_password1]');
        if ($this->form_validation->run() ==  false) {
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('layouts/topbar', $data);
            $this->load->view('user/change_password', $data);
            $this->load->view('layouts/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password1 = $this->input->post('new_password1');
            $new_password2 = $this->input->post('new_password2');
            if (!password_verify($current_password, $data['user']['password'])) {
                // $this->session->set_flashdata('flash_gagal', 'Password saat ini salah');
                $this->session->set_flashdata('error', 'Wrong current password!');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('member/user');
            } else {
                if ($current_password == $new_password1) {
                    // $this->session->set_flashdata('flash_gagal', 'Kata Sandi baru tidak boleh sama dengan kata sandi yang lama');
                    $this->session->set_flashdata('warning', 'New password cannot be the same as current password!');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('member/user');
                } else {
                    $password_hash = password_hash($new_password1, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    // $this->session->set_flashdata('flash', 'Berhasil diubah');
                    $this->session->set_flashdata('success', 'Password Changed!');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password changed!</div>');
                    redirect('member/user');
                }
            }
        }
    }
}
