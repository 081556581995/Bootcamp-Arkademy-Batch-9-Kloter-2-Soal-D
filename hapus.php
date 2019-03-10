<?php
include 'config/koneksi.php';
$kode = $_GET['id'];

mysql_query("DELETE FROM person WHERE id=$kode");
header('Location: index_p.php');
?>
