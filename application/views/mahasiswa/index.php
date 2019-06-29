<div class="row">
  <div class="col-md-6">
    <div class="list-group">
      <h3 class="mb-3">Daftar Mahasiswa</h3>
      <?php foreach($mahasiswa as $mhs): ?>
      <li class="list-group-item"><?= $mhs['nama'] ?></li>
      <?php endforeach ?>
    </div>
  </div>
</div>