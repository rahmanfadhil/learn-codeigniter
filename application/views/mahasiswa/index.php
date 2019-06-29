<div class="row mb-3">
  <div class="col-md-4">
    <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary btn-sm">Tambah Mahasiswa</a>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="list-group">
      <h3 class="mb-3">Daftar Mahasiswa</h3>
      <?php foreach($mahasiswa as $mhs): ?>
      <li class="list-group-item"><?= $mhs['nama'] ?></li>
      <?php endforeach ?>
    </div>
  </div>
</div>