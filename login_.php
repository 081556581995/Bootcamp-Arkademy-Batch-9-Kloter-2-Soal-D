<?php
session_start(); // Memulai Session

if (isset($_POST['username'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "ID or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['id'];
		$password=$_POST['name'];
		// Membangun koneksi ke database
		$connection = mysql_connect("localhost", "root", "");
		// Seleksi Database
		$db = mysql_select_db("database", $connection);
		// SQL query untuk memeriksa apakah terdapat di database?
		$query = mysql_query("select * from person where name='$password' AND id='$username'", $connection);
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['person']=$username; // Membuat Sesi/session
				header("location: index.php"); // Mengarahkan ke halaman profil
				} else {
				echo "<script> alert('username or password false'); window.history.back();</script>";

				}
				mysql_close($connection); // Menutup koneksi
	}
}
?>
