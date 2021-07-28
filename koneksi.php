<?php
error_reporting(E_ALL ^ E_NOTICE);

$hostname="localhost"; 
$username="root"; 
$password=""; 
$database="dosen";
if (!$connect=mysqli_connect($hostname,$username,$password))
{
echo mysqli_error($connect);
exit;
}
else
{
// select default database
mysqli_select_db($connect, $database);
}
?>
