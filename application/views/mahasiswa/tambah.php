<h2>Tambah Mahasiswa</h2>

<div class="row mt-3">
  <div class="col-md-6">
    <form action="" method="post">
      <?php if (validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      <?php endif ?>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input name="nama" type="text" id="nama" class="form-control">
      </div>
      <div class="form-group">
        <label for="nrp">NRP</label>
        <input name="nrp" type="text" id="nrp" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="text" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" class="custom-select">
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Teknik Mesin">Teknik Mesin</option>
          <option value="Teknik Lingkungan">Teknik Lingkungan</option>
          <option value="Teknik Pangan">Teknik Pangan</option>
        </select>
      </div>
      <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
    </form>
  </div>
</div>