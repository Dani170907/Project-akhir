<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {
    
    public function index() {
        $this->load->view('templates/admin_header');
        $this->load->view('tambah_lomba');
    }

    public function simpan() {
        $this->load->model('EventModel');
        $this->EventModel->tambahLomba(); // Panggil method model untuk menambah event
        $this->session->set_flashdata('success', 'Event berhasil ditambahkan');
        redirect(base_url('Tambah'));
    }
}