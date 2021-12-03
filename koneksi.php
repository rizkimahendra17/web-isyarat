<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db ="webisyarat";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("keneksi gagal : ".mysql_connect_error());
	}else {
		
	}

	
?>