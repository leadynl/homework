<?php
	setcookie("username", "", time()-10 );
	setcookie("password", "", time()-10 );
	header("Location: login.php");
?>