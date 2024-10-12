<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->beranda();
    }

    public function beranda() {
        // $this->load->view('templates/admin_header');
        $this->load->view('admin');
    }

    public function pendaftaran() {
        $this->load->view('pendaftaran');
    }

    public function event() {
        $this->load->view('event');
    }

}
