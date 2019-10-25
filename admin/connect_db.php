<?php 
	$conn = mysqli_connect('localhost','root','','admin')or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
?>