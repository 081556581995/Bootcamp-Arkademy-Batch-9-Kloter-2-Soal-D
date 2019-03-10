<?php
include 'config/koneksi.php';
$kode = $_GET['id'];

mysql_query("DELETE FROM regions WHERE id=$kode");
header('Location: index_r.php');
?>
