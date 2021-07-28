<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Dosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initialscale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid"><BR>
		<div class="container">
			<div class="jumbotron text-left">
			<h2>Input Data Dosen</h2>
			</div>
			
			<form class="form-horizontal" method="post" action="input.php">
				<div class="form-group row">
					<label class="control-label col-sm-2" for="nidn">NIDN:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="nama">Nama:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-sm-2" for="tempat">Tempat Lahir:</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Lahir" name="tempat">
					</div>
					
					<label class="control-label col-sm-2" for="tanggal">Tanggal Lahir:</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Lahir" name="tanggal">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="telepon">Nomor Telepon:</label>
					<div class="col-sm-4">
						<input type="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" name="telepon">
					</div>	
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pendidikan">Pendidikan Terakhir:</label>
					<div class="col-sm-4">
						<select class="form-control" id="pendidikan" name="pendidikan">
							<option value='-'>--Masukkan Pendidikan Terakhir--</option>
							<option value='S2'>S2</option>
							<option value='S3'>S3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
					<div class="col-sm-10">
						<label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria"> Pria</label>
						<label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita"> Wanita</label>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="ahli">Spesialisasi:</label>
					<div class="col-sm-10">
						<label class="checkbox-inline"><input type='checkbox' name='ahli1' value='Programming' id="ahli"> Programming</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli2' value='Networking' id="ahli"> Networking</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli3' value='Database' id="ahli"> Database</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli4' value='Analyst' id="ahli"> Analyst</label>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="email">Username:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Masukkan Username (Email)" name="email">
					</div>	
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="password">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
					</div>	
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="golongan">Golongan:</label>
					<div class="col-sm-10">
						<select class="form-control" id="golongan" name="golongan">
							<option value='-'>--Masukkan Golongan--</option>
							<option value='3A'>3A</option>
							<option value='3B'>3B</option>
							<option value='3C'>3C</option>
							<option value='4A'>4A</option>
							<option value='4B'>4B</option>
							<option value='4C'>4C</option>
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pangkat">Pangkat:</label>
					<div class="col-sm-10">
						<select class="form-control" id="pangkat" name="pangkat">
							<option value='-'>--Masukkan Pangkat--</option>
							<option value='AA'>AA</option>
							<option value='L'>L</option>
							<option value='LK'>LK</option>
							<option value='GB'>GB</option>
						</select>
					</div>
				</div>
				 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pengalaman">Pengalaman Kerja:</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" style="resize: none" id="pengalaman" name="pengalaman"></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="gaji">Gaji Pokok:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="gaji" placeholder="Masukkan Gaji Pokok" name="gaji">
					</div>
				</div>
		 
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success" name="submit"><span class="glyphicon glyphicon-ok"></span> Submit</button>
						<button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
						<a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"> Logout</a>
					</div>
				</div>
			</form>
		</div>
		
		
		
		<div class="col-sm-12 col-sm-offset-1">
		
			<?php
			if (isset($_POST['submit']))
			{
			$nidn = $_POST['nidn'];
			$nama = $_POST['nama'];
			$tempat = $_POST['tempat'];
			$tanggal = $_POST['tanggal'];
			$telepon = $_POST['telepon'];
			$pendidikan = $_POST['pendidikan'];
			$jk = $_POST['jk'];
			$spesialisasi = "";
			for ($i=1;$i<=4;$i++)
			{
			$ahli = $_POST['ahli'.$i];
			if (!empty($ahli))
			$spesialisasi .= $ahli.", ";
			}
			$email = $_POST['email'];
			$password = $_POST['password'];
			$golongan = $_POST['golongan'];
			if ($golongan == '3A' || $golongan == '3B'){
                $tugol = 500000;
                //$golongan = $_POST['golongan'];
            }
            elseif($golongan == '3C'){
                $tugol = 750000;
                //$golongan = $_POST['golongan'];
            }
            elseif($golongan == '4A' || $golongan == '4B'){
                $tugol = 1000000;
                //$golongan = $_POST['golongan'];
            }
            else{
                $tugol = 1500000;
                //$golongan = $_POST['golongan'];
            }
			//$golongan = $_POST['golongan'];
			
			$pangkat = $_POST['pangkat'];
			if ($pangkat == 'AA'){
                $tupang = 375000;
                //$pangkat = $_POST['pangkat'];
            }
            elseif($pangkat == 'L'){
                $tupang = 750000;
                //$pangkat = $_POST['pangkat'];
            }
            elseif($pangkat == 'LK'){
                $tupang = 1500000;
                //$pangkat = $_POST['pangkat'];
            }
            else{
                $tupang = 7500000;
                //$pangkat = $_POST['pangkat'];
            }
			//$pangkat = $_POST['pangkat'];
			
			$pengalaman = $_POST['pengalaman'];
			$gaji = $_POST['gaji'];
			$total = $tugol + $tupang + $gaji;
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $waktu = date("Y-m-d H:i:s");
            //$total = $_POST['total'];
			
			$queryinsert = mysqli_query($connect, "INSERT INTO tabel_dosen VALUES ('','$nidn','$nama','$tempat','$tanggal','$telepon','$pendidikan','$jk','$spesialisasi','$email','$password','$golongan','$pangkat','$pengalaman','$gaji')");
			
			$queryedit1 = mysqli_query($connect, "INSERT INTO log (nidn,nama,waktu,username,total) VALUES ('$nidn','$nama','$waktu','$username','$total')");
			
			if ($queryinsert)
			{
			?>
			
			<div class="alert alert-success alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Data Dosen Berhasil Diinput.
			</div>
			
			<?php
			}
			else
			{
			?>
			<div class="alert alert-ddanger alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Failed!</strong> Data Dosen Gagal Diinput.
			</div>
			<?php
			}
			}
			if (isset($_GET['hapus']))
			{
			$nidn = $_GET['nidn'];
			$querydelete = mysqli_query($connect, "DELETE FROM tabel_dosen WHERE nidn='$nidn'");
			if ($querydelete)
			{
			?>
			<div class="alert alert-success alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Data Dosen Berhasil Dihapus.
			</div>
			<?php
			}
			else
			{
			?>
			<div class="alert alert-ddanger alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Failed!</strong> Data Dosen Gagal Dihapus.
			</div>
			<?php
			}
			}
			?>
		</div>
		<HR>
		
		
		<div class="table-responsive col-sm-12 col-sm-offset-1">
			<h2 style="background-color:orange">List Data Dosen</h2>
			<table class="table table-striped ">
				<thead>
					<tr>
						<th>ID</th>
						<th>NIDN</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Nomor Telepon</th>
						<th>Pendidikan Terakhir</th>
						<th>Jenis Kelamin</th>
						<th>Spesialisasi</th>
						<th>Username</th>
						<th>Password</th>
						<th>Golongan</th>
						<th>Pangkat</th>
						<th>Pengalaman</th>
						<th>Gaji Pokok</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					$querydosen = mysqli_query($connect, "SELECT * FROM tabel_dosen ORDER BY id");
					$jumdosen = mysqli_num_rows($querydosen);
					if ($jumdosen == 0)
					{
					?>
					<tr>
						<td colspan="16" class="danger">Data Dosen Masih Kosong</td>
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
						<td><?=$dosen['tempat']?></td>
						<td><?=$dosen['tanggal']?></td>
						<td><?=$dosen['telepon']?></td>
						<td><?=$dosen['pendidikan']?></td>
						<td><?=$dosen['jenis_kelamin']?></td>
						<td><?=$dosen['spesialisasi']?></td>
						<td><?=$dosen['email']?></td>
						<td><?=$dosen['password']?></td>
						<td><?=$dosen['golongan']?></td>
						<td><?=$dosen['pangkat']?></td>
						<td><?=$dosen['pengalaman']?></td>
						<td><?=$dosen['gaji']?></td>
						<td><a href="edit.php?nidn=<?=$dosen['nidn']?>"><button type="button" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
						<td><a href="lihat.php?lihat=ok&nidn=<?=$dosen['nidn']?>"><button type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span> Lihat</button></a></td>
						<td><a href="input.php?hapus=ok&nidn=<?=$dosen['nidn']?>"><button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</button></a></td>						
					</tr>
					<?php
					}
					}
					?>
				</tbody>
			</table>
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