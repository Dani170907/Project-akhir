<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index() {
        $this->beranda();
    }

    public function beranda() {
        $this->load->view('templates/admin_header');
        $this->load->view('admin');
    }
    
    public function pendaftaran() {
        $this->load->view('templates/admin_header');
        $this->load->view('pendaftaran');
    }
    
    public function event() {
        $this->load->model('EventModel');
        $this->load->view('templates/admin_header');
        $data['tb_jns_lomba'] = $this->EventModel->getEvents();
        $this->load->view('event', $data);
    }

    public function hapus($id) {
        $this->db->delete('tb_jns_lomba', ['id' => $id]) ;
        redirect('admin/event');
    }

}
