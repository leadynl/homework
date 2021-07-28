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
 <title>Form Lihat</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container"><BR>
		<div class="jumbotron text-left">
		<h2>Lihat Data Dosen</h2>
		</div>
		<form class="form-horizontal" method="post" action="input.php">
			<input type='hidden' name='id' id='id' value='<?=$id?>'>

				<div class="form-group row">
					<label class="control-label col-sm-2" for="nidn">NIDN:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn" value="<?=$info['nidn']?>" readonly>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="nama">Nama:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?=$info['nama']?>" readonly>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="tempat">Tempat Lahir:</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Lahir" name="tempat" value="<?=$info['tempat']?>" readonly>
					</div>
					
					<label class="control-label col-sm-2" for="tanggal">Tanggal Lahir:</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Lahir" name="tanggal" value="<?=$info['tanggal']?>" readonly>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="telepon">Nomor Telepon:</label>
					<div class="col-sm-4">
						<input type="telepon" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" name="telepon" value="<?=$info['telepon']?>" readonly>
					</div>	
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="pendidikan">Pendidikan Terakhir:</label>
					<div class="col-sm-4"> 
						<select class="form-control" id="pendidikan" name="pendidikan" readonly>
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
					<label class="control-label col-sm-2" for="ahli">Spesialis:</label>
					<div class="col-sm-10">
						<label class="checkbox-inline"><input type='checkbox' name='ahli1' value='Programming' id="ahli" <?php if (preg_match("/Programming/", $info['spesialis'])) echo "checked"; ?>> Programming</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli2' value='Networking' id="ahli" <?php if (preg_match("/Networking/", $info['spesialis'])) echo "checked"; ?>> Networking</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli3' value='Database' id="ahli" <?php if (preg_match("/Database/", $info['spesialis'])) echo "checked"; ?>> Database</label>
						<label class="checkbox-inline"><input type='checkbox' name='ahli4' value='Analyst' id="ahli" <?php if (preg_match("/Analyst/", $info['spesialis'])) echo "checked"; ?>> Analyst</label>
					</div>
				</div>
		 
				<div class="form-group row text-left">
					<label class="control-label col-sm-2" for="email">Username:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Masukkan Username (Email)" name="email" readonly value="<?=$info['email']?>">
					</div>
				</div>
		 
				<div class="form-group row">
					<label class="control-label col-sm-2" for="password">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" readonly value="<?=$info['password']?>">
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
						<textarea class="form-control" rows="5" style="resize: none" id="pengalaman" readonly name="pengalaman"><?=$info['pengalaman']?></textarea>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="control-label col-sm-2" for="gaji">Gaji Pokok:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="gaji" placeholder="Masukkan Gaji Pokok" name="gaji" value="<?=$info['gaji']?>" readonly>
					</div>
				</div>
				 
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-10">
						
            <a href="log.php" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"> Log Data</a>
			<a href="input.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"> Kembali</a>
            <a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"> Logout</a>
            </div>
				</div>
			</form>
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