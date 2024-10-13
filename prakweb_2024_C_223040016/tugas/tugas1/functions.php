<?php
define('BASE_URL', '/prakweb_2024_C_223040016/tugas/tugas1');

function koneksi()
{
  // koneksi ke DB
  $conn = mysqli_connect('localhost', 'root', '', 'prakweb2024_223040016') or die('DATABASE ERROR!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahunTerbit = htmlspecialchars($data['tahunTerbit']);
  $kategori = htmlspecialchars($data['kategori']);
  $jumlahHalaman = htmlspecialchars($data['jumlahHalaman']);

  // Query dengan nama kolom yang sesuai
  $query = "INSERT INTO dataBuku (judul, pengarang, penerbit, tahunTerbit, kategori, jumlahHalaman) 
            VALUES ('$judul', '$pengarang', '$penerbit', '$tahunTerbit', '$kategori', '$jumlahHalaman')";

  // Debug query dan eksekusi
  var_dump($query);  // Tampilkan query untuk melihat apakah ada kesalahan
  mysqli_query($conn, $query) or die(var_dump(mysqli_error($conn)));  // Tampilkan pesan error jika ada

  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
