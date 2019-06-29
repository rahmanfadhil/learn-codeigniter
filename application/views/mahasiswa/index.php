<?php if ($this->session->flashdata('flash')): ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif ?>

<div class="row mb-3">
  <div class="col-md-6">
    <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary btn-sm">Tambah Mahasiswa</a>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="list-group">
      <h3 class="mb-3">Daftar Mahasiswa</h3>
      <?php foreach($mahasiswa as $mhs): ?>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <?= $mhs['nama'] ?>
        <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger" onclick="return confirm('Yakin?')">
          hapus
        </a>
      </li>
      <?php endforeach ?>
    </div>
  </div>
</div>