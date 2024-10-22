<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventModel extends CI_Model {

    public function getEvents() {
        return $this->db->get('tb_jns_lomba')->result_array();
    }

    public function getLombaById($idLomba) {
        return $this->db->get_where('tb_jns_lomba', ['idLomba' => $idLomba])->row_array();
    }

    public function tambahLomba() {
        $data = [
            "namaLomba" => $this->input->post('nama_lomba', true),
            "penyelenggara" => $this->input->post('penyelenggara', true)
        ];
        $this->db->insert('tb_jns_lomba', $data);
    }

    public function deleteEvent($idLomba) {
        $this->db->delete('tb_jns_lomba', ['idlomba' => $idLomba]);
    }

    public function updateLomba($idLomba) {
        $data = [
            "namaLomba" => $this->input->post('nama_lomba', true),
            "penyelenggara" => $this->input->post('penyelenggara', true)
        ];
        $this->db->where('idLomba', $idLomba);
        $this->db->update('tb_jns_lomba', $data);
    }
}
