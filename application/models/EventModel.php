<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventModel extends CI_Model {

    public function getEvents() {
        $this->db->select('*');
        $this->db->from('tb_jns_lomba');
        return $this->db->get()->result_array();
    }

    public function tambahLomba() {
        $data = [
            "namaLomba" => $this->input->post('nama_lomba', true),
            "penyelenggara" => $this->input->post('penyelenggara', true)
        ];

        $this->db->insert('tb_jns_lomba', $data);
    }
}