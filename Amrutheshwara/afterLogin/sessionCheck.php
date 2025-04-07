<?php session_start();
if(!isset($_SESSION['templeuser']))
	echo "<script>location.href='../register.php';</script>";

?>