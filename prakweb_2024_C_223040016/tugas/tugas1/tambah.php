<?php
require('functions.php');

$judul = 'Tambah Data Buku';

//ketika tombol submit diklik
if(isset($_POST["tambah"])) {
    //jalankan fungsi tambah()
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } 
}

require('views/tambah.view.php');
