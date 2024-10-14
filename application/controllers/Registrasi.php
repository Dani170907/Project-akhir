<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    
    public function index() {
        $this->load->view('registrasi');
    }

    public function simpan() {
        $this->load->model('User_model');
        
        // Simpan data user
        $this->User_model->simpanUser();

        // Redirect ke halaman login setelah berhasil menyimpan data
        redirect('Login');
    }
}
