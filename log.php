<?php
error_reporting(E_ALL ^ E_NOTICE);
	include "koneksi.php";
	$nidn = $_GET['nidn'];
	$queryinfo = mysqli_query($connect, "SELECT * FROM tabel_dosen WHERE nidn='$nidn'");
	$info = mysqli_fetch_array($queryinfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Log Data</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="jumbotron text-left">
			<h2>List Data Log Dosen</h2>
			</div>
				<table class="table table-striped ">
				<thead>
					<tr>
						<th>ID</th>
						<th>NIDN</th>
						<th>Nama</th>
						<th>Waktu</th>
						<th>Username</th>
						<th>Total Gaji</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$querydosen = mysqli_query($connect, "SELECT * FROM log ORDER BY id");
				$jumdosen = mysqli_num_rows($querydosen);
				if ($jumdosen == 0)
				{
				?>
				<tr>
				<td colspan="12" class="danger">Data Dosen Masih Kosong</td>
				</tr>
			<?php
				}
				else
				{
					while ($dosen = mysqli_fetch_array($querydosen))
					{
			?>
				<tr>
					<td><?=$dosen['id']?></td>
					<td><?=$dosen['nidn']?></td>
					<td><?=$dosen['nama']?></td>
					<td><?=$dosen['waktu']?></td>
					<td><?=$dosen['username']?></td>
					<td><?=$dosen['gaji']?></td>
				</tr>
			<?php
					}
				}
			?>
			
			<a href="input.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"> Kembali</a>
            <a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"> Logout</a>
		</div>
	</div>
	
	<?php
			$username = $_COOKIE['username'];
			$password = $_COOKIE['password'];
			
			if (!isset($username))
			{
				?>
				<script>
					alert('Cookie Habis');
					document.location='login.php';
				</script>
				<?php
				exit;
			}
		?>
		<input type='hidden' name='username' id='username'  value='<?=$username?>'>
</body>
</html>