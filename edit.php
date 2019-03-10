<?php
include 'config/koneksi.php';
$kode = $_GET['id'];
$tampil = mysql_fetch_array(mysql_query("SELECT * FROM person WHERE id = '$kode'"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD dengan Bootstrap</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3>Edit Data Siswa</h3><a href="index.php" class="btn btn-info">Lihat Data</a><hr>
			<form role="form" action="" method="post">
			<input type="hidden" name="id" value="<?php echo $tampil['id'];?>">
      <div class="form-group">
          <label>ID</label>
          <input type="text" class="form-control" name="id" value="<?php echo $tampil['id'];?>" disabled>
      </div>
      <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $tampil['name'];?>" required autofocus>
      </div>
      <div class="form-group">
          <label>Region_ID</label>
          <input type="text" class="form-control" name="region_id" value="<?php echo $tampil['region_id'];?>" disabled>
      </div>
      <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" required name="address"><?php echo $tampil['address'];?></textarea>
      </div>
      <div class="form-group">
          <label>Income</label>
          <input type="text" class="form-control" name="income" value="<?php echo $tampil['income'];?>" required autofocus>
      </div>
      <div class="form-group">
          <label>Created_at</label>
          <input type="text" class="form-control" name="created_at" value="<?php echo $tampil['created_at'];?>" required autofocus>
      </div>
      <div class="form-group">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
      </div>
			</form>
			<?php
				if (isset($_POST["simpan"])) {
					$simpan = mysql_query("UPDATE person SET name = '$_POST[name]', address = '$_POST[address]' , income = '$_POST[income]', created_at = '$_POST[created_at]'WHERE id = '$_POST[id]'");
					if ($simpan) {
						header('Location: index_p.php');
					}else{
						echo "Gagal!";
					}
				}
				?>
		</div>
	</div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
