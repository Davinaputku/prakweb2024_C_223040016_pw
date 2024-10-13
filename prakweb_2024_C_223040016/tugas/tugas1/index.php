<?php
require('functions.php');
$judul = 'Home';

$buku = query("SELECT * FROM dataBuku");

require('views/index.view.php');
