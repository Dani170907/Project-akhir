<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {
    
    public function event() {
        $this->load->view('templates/admin_header');
        $this->load->view('tambah_lomba');
    }

    public function pendaftaran() {
        $this->load->model('EventModel');
        $data['tb_jns_lomba'] = $this->EventModel->getEvents();
        $data['tb_pendaftaran'] = $this->db->get('tb_pendaftaran');

        $this->load->view('templates/admin_header');
        $this->load->view('tambah_pendaftaran', $data);
    }

    public function simpanPendaftaran() {
        $this->load->model('PendaftaranModel');
        $this->PendaftaranModel->tambahPendaftaran();
        redirect(base_url('Admin/pendaftaran'));
    }

    public function simpanEvent() {
        $this->load->model('EventModel');
        $this->EventModel->tambahLomba();
        redirect(base_url('Admin/event'));
    }
}