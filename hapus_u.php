<?php
include 'config/koneksi.php';
$kode = $_GET['id'];

mysql_query("DELETE FROM user WHERE id=$kode");
header('Location: index_u.php');
?>
