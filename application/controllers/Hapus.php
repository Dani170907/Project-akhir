<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('EventModel');
        $this->load->model('PendaftaranModel');
    }
    
    public function hapusEvent($idLomba) {
        $this->EventModel->deleteEvent($idLomba); 
        redirect('admin/event');
    }

    public function hapusPendaftaran($idPendaftaran) {
        $this->PendaftaranModel->deletePendaftaran($idPendaftaran);
        redirect('admin/pendaftaran');
    }
    
}
