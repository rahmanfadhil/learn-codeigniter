<?php

class Mahasiswa extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    // $this->load->library('session');
  }

  public function index()
  {
    $data['title'] = 'Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index');
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nrp', 'NRP', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Tambah Mahasiswa';
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->tambahMahasiswa();
      $this->session->set_flashdata('flash', 'ditambahkan');
      redirect('mahasiswa');
    }
  }

  public function hapus($id)
  {
    $this->Mahasiswa_model->hapusMahasiswa($id);
    $this->session->set_flashdata('flash', 'dihapus');
    redirect('mahasiswa');
  }
}