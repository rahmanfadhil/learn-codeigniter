<?php

class Mahasiswa_model extends CI_Model {
  public function getAllMahasiswa() {
    return $this->db->get('mahasiswa')->result_array();
  }

  public function tambahMahasiswa() {
    $this->db->insert('mahasiswa', [
      'nama' => $this->input->post('nama', true),
      'nrp' => $this->input->post('nrp', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
    ]);
  }

  public function hapusMahasiswa($id) {
    $this->db->delete('mahasiswa', ['id' => $id]);
  }
}