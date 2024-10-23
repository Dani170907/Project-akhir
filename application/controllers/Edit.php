<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        is_logged_in();
        $this->load->model('EventModel');
        $this->load->model('PendaftaranModel');
        $this->data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function index() {
        $this->beranda();
    }

    public function beranda() {
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('admin');
    }

    public function pendaftaran() {
        $this->data['tb_pendaftaran'] = $this->PendaftaranModel->getPendaftaran();
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('pendaftaran', $this->data);
    }

    public function editPendaftaran($idPendaftaran) {
        $this->data['tb_jns_lomba'] = $this->EventModel->getEvents(); 
        $this->data['tb_pendaftaran'] = $this->PendaftaranModel->getPendaftaranById($idPendaftaran);
    
        // Cek apakah data pendaftaran ada
        if (empty($this->data['tb_pendaftaran'])) {
            // Jika tidak ada, redirect atau tampilkan pesan error
            redirect('admin/pendaftaran'); // Atau tampilkan pesan error
            return; // Hentikan eksekusi lebih lanjut
        }
    
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('edit_pendaftaran', $this->data);
    }
    
    public function updatePendaftaran($idPendaftaran) {
        $this->PendaftaranModel->updatePendaftaran($idPendaftaran);
        redirect('admin/pendaftaran');
    }
    
    
    public function event() {
        $this->data['tb_jns_lomba'] = $this->EventModel->getEvents();
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('event', $this->data);
    }

    public function editLomba($idLomba) {
        $this->data['tb_jns_lomba'] = $this->EventModel->getLombaById($idLomba);
        $this->load->view('templates/admin_header', $this->data);
        $this->load->view('edit_lomba', $this->data);
    }

    public function updateLomba($idLomba) {
        $this->EventModel->updateLomba($idLomba);
        redirect('admin/event');
    }
}
