<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranModel extends CI_Model {

    public function getPendaftaran() {
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_jns_lomba', 'tb_jns_lomba.idLomba = tb_pendaftaran.idlomba');

        return $this->db->get()->result_array();
    }

    public function tambahPendaftaran() {
        $data = [
            "idLomba" => $this->input->post('id_lomba', true),
            "namaPendaftar" => $this->input->post('nama_pendaftar', true),
            "kelas" => $this->input->post('kelas', true),
            "noHp" => $this->input->post('no_hp', true),
            "tglDaftar" => date('Y-m-d H:i:s')
        ];

        $this->db->insert('tb_pendaftaran', $data);
    }

    public function deletePendaftaran($idPendaftaran) {
        $this->db->delete('tb_pendaftaran', ['idPendaftaran' => $idPendaftaran]);
    }    

    public function updatePendaftaran($idPendaftaran) {
        $data = [
            "idLomba" => $this->input->post('idLomba', true),
            "namaPendaftar" => $this->input->post('nama_pendaftar', true),
            "kelas" => $this->input->post('kelas', true),
            "noHp" => $this->input->post('no_hp', true),
        ];
        $this->db->where('idPendaftaran', $idPendaftaran);
        return $this->db->update('tb_pendaftaran', $data);
    }
    

    public function getPendaftaranById($idLomba) {
        return $this->db->get_where('tb_pendaftaran', ['idLomba' => $idLomba])->row_array();
    }
    

}