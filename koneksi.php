<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webinarcowebinar";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn) {
		echo "Koneksi Gagal";
	}
