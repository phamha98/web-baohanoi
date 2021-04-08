<?php

	$hostname=('localhost');
	$User="root";
	$Pass="";
	$db="quanlytintuc";
	$conn=mysqli_connect($hostname,$User,$Pass,$db);
	mysqli_query($conn,'setnames"utf8"');
?>