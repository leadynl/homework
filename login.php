<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(bg.jpg);">

<div class="container col-5">
  <div class="card-text">
    <div class="card" style="width:500px">
      <div class="card-body text-center">
        <h3 class="card-title">Login</h3>
        <?php
	if (isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if ($username == "leady" && $password == "1861028")
		{
			setcookie("username", $username, time()+360000 );
			setcookie("password", $password, time()+360000 );
			header("Location: input.php");
		}
		else
		{
			echo "Username dan Password Tidak Tepat!";
		}
	}
?>
        <form method="post" action="login.php" autocomplete='off'>
            <div class="formgroup">
                <label class="control-label col-sm-12 text-left" for="username">Username:</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" name="username" placeholder="Input Username" name="username" autofocus></a>
          </div>
          <div class="formgroup">
                <label class="control-label col-sm-12 text-left" for="password">Password:</label>
                <div class="col-sm-12"> 
                <input type="password" class="form-control" name="password" placeholder="Input Password" name="password">
                </div>
          </div>
          <br>
            <button type="submit" name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
          </form>

      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>