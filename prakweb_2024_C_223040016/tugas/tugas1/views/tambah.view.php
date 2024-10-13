<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Data Buku</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" autofocus required>
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" id="pengarang">
        </div>
        <div class="mb-3">
          <label for="penerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="penerbit">
        </div>
        <div class="mb-3">
          <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
          <input type="text" class="form-control" name="tahunTerbit" id="tahunTerbit">
        </div>
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" name="kategori" id="kategori">
        </div>
        <div class="mb-3">
          <label for="jumlahHalaman" class="form-label">Jumlah Halaman</label>
          <input type="text" class="form-control" name="jumlahHalaman" id="jumlahHalaman">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>