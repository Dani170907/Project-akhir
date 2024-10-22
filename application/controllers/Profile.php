<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index() {
        // Ambil data yang login
        $data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); 

        $this->load->view('templates/admin_header', $data);
        $this->load->view('profile', $data);   
    }

    public function editProfile() {
        $data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); 

        $this->load->view('edit_profile', $data); 
    }

    public function updateProfile() {
        $data = 
        [
            "nama" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', PASSWORD_DEFAULT)
        ];

        $this->db->where('id' , $this->input->post('id'));
        $this->db->update('user' , $data);
        redirect('login');
    }    
}

