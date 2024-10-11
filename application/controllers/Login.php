<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index() {
        $this->load->view('login');
    }

    public function verifikasi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', 'Password salah');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', 'Username tidak ditemukan');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', 'Logout Success');
        redirect('login');
    }
}