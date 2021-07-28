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
 <title>Form Edit</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container"><BR>
		<div class="jumbotron text-left">
		<h2>Edit Data Dosen</h2>
		</div>
		<form class="form-horizontal" method="post" action="edit.php">
			<input type='hidden' name='nidn' id='nidn' value='<?=$nidn?>'>
			
				<div class="form-group row">
					<label class="control-label col-sm-2" for="nidn">NIDN:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn" value="<?=$info['nidn']?>">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="nama">Nama:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?=$info['nama']?>">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="tempat">Tempat Lahir:</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Lahir" name="tempat" value="<?=$info['tempat']?>">
					</div>
					
					<label class="control-label col-sm-2" for="tanggal">Tanggal Lahir:</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Lahir" name="tanggal" value="<?=$info['tanggal']?>">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="telepon">Nomor Telepon:</label>
					<div class="col-sm-4">
						<input type="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" name="telepon" value="<?=$info['telepon']?>">
					</div>	
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pendidikan">Pendidikan Terakhir:</label>
					<div class="col-sm-4"> 
						<select class="form-control" id="pendidikan" name="pendidikan">
							<option value='-' <?php if ($info['pendidikan'] == "-") echo "selected"; ?>>--Masukkan Pendidikan Terakhir--</option>
							<option value='S2' <?php if ($info['pendidikan'] == "S2") echo "selected"; ?>>S2</option>
							<option value='S3' <?php if ($info['pendidikan'] == "S3") echo "selected"; ?>>S3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
					<div class="col-sm-10">
						<label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria" <?php if ($info['jenis_kelamin'] == "Pria") echo "checked"; ?>> Pria</label>
						<label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita" <?php if ($info['jenis_kelamin'] == "Wanita") echo "checked"; ?>> Wanita</label>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="ahli">Spesialisasi:</label>
					<div class="col-sm-10">
						<label class="checkbox-inline"><input type='checkbox' name='ahli1' value='Programming' id="ahli" <?php if (preg_match("/Programming/", $info['spesialisasi'])) echo "checked"; ?>> Programming</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli2' value='Networking' id="ahli" <?php if (preg_match("/Networking/", $info['spesialisasi'])) echo "checked"; ?>> Networking</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli3' value='Database' id="ahli" <?php if (preg_match("/Database/", $info['spesialisasi'])) echo "checked"; ?>> Database</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli4' value='Analyst' id="ahli" <?php if (preg_match("/Analyst/", $info['spesialisasi'])) echo "checked"; ?>> Analyst</label>
					</div>
				</div>
		 
				<div class="form-group row text-left">
					<label class="control-label col-sm-2" for="email">Username:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Masukkan Username (Email)" name="email" value="<?=$info['email']?>">
					</div>
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="password">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" value="<?=$info['password']?>">
					</div>	
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="golongan">Golongan:</label>
					<div class="col-sm-10">
						<select class="form-control" id="golongan" name="golongan">
							<option value='-'>--Masukkan Golongan--</option>
							<option value='3A' <?php if ($info['golongan'] == "3A") echo "selected"; ?>>3A</option>
							<option value='3B' <?php if ($info['golongan'] == "3B") echo "selected"; ?>>3B</option>
							<option value='3C' <?php if ($info['golongan'] == "3C") echo "selected"; ?>>3C</option>
							<option value='4A' <?php if ($info['golongan'] == "4A") echo "selected"; ?>>4A</option>
							<option value='4B' <?php if ($info['golongan'] == "4B") echo "selected"; ?>>4B</option>
							<option value='4C' <?php if ($info['golongan'] == "4C") echo "selected"; ?>>4C</option>
						</select>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pangkat">Pangkat:</label>
					<div class="col-sm-10">
						<select class="form-control" id="pangkat" name="pangkat">
							<option value='-'>--Masukkan Pangkat--</option>
							<option value='AA' <?php if ($info['pangkat'] == "AA") echo "selected"; ?>>AA</option>
							<option value='L' <?php if ($info['pangkat'] == "L") echo "selected"; ?>>L</option>
							<option value='LK' <?php if ($info['pangkat'] == "LK") echo "selected"; ?>>LK</option>
							<option value='GB' <?php if ($info['pangkat'] == "GB") echo "selected"; ?>>GB</option>
						</select>
					</div>
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pengalaman">Pengalaman Kerja:</label>
					<div class="col-sm-10"> 
						<textarea class="form-control" rows="5" style="resize: none" id="pengalaman" name="pengalaman"><?=$info['pengalaman']?></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="gaji">Gaji Pokok:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="gaji" placeholder="Masukkan Gaji Pokok" name="gaji" value="<?=$info['gaji']?>">
					</div>
				</div>
				 
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="input.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"> Kembali</a>
						<button type="submit" class="btn btn-success" name="edit"><span class="glyphicon glyphicon-edit"></span> Edit</button>
						<button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-repeat"></span> Reset</button>				
					</div>
				</div>
		</form>
	</div>
		
		
		
		<div class="col-sm-10 col-sm-offset-1">
			<?php
			if (isset($_POST['edit']))
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
			
			$queryedit = mysqli_query($connect, "UPDATE tabel_dosen SET nidn='$nidn', nama='$nama', tempat='$tempat', tanggal='$tanggal', telepon='$telepon', pendidikan='$pendidikan', jenis_kelamin='$jk', spesialisasi='$spesialisasi', email='$email', password='$password', golongan='$golongan', pangkat='$pangkat', pengalaman='$pengalaman', gaji='$gaji' WHERE nidn='$nidn'");
			
			$queryedit1 = mysqli_query($connect, "INSERT INTO log (nidn,nama,waktu,username,total) VALUES ('$nidn','$nama','$waktu','$username','$total')");
			
			if ($queryedit)
			{
			?>
			<div class="alert alert-success alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Data Dosen Berhasil Diedit. Klik <a href="input.php">disini</a> untuk Input Data Baru.
			</div>
			<?php
			}
			else
			{
			?>
			<div class="alert alert-ddanger alertdismissable">
				<a href="#" class="close" datadismiss="alert" aria-label="close">&times;</a>
				<strong>Failed!</strong> Data Dosen Gagal Diedit.
			</div>
			<?php
			}
			}
			?>
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