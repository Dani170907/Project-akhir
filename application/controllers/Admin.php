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
        $data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); 

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin');
    }
    
    public function pendaftaran() {
        $data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); 

        $this->load->view('templates/admin_header', $data);
        $this->load->view('pendaftaran');
    }
    
    public function event() {
        $data['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(); 

        
        $this->load->model('EventModel');
        $this->load->view('templates/admin_header', $data);
        $data['tb_jns_lomba'] = $this->EventModel->getEvents();
        $this->load->view('event', $data);
    }

    public function hapus($id) {
        $this->db->delete('tb_jns_lomba', ['id' => $id]) ;
        redirect('admin/event');
    }

}
