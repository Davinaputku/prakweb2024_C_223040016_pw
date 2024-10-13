<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>
  <h3>Data Buku</h3>

  <a href="tambah.php" class="btn btn-primary">Tambah Data Buku</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">Kategori</th>
        <th scope="col">Jumlah Halaman</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($buku as $buku) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $buku['judul']; ?></td>
        <td><?= $buku['pengarang']; ?></td>
        <td><?= $buku['penerbit']; ?></td>
        <td><?= $buku['tahunTerbit']; ?></td>
        <td><?= $buku['kategori']; ?></td>
        <td><?= $buku['jumlahHalaman']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php require('partials/footer.php'); ?>