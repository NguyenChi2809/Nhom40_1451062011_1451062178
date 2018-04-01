<?php 
// $host = "127.0.0.1";
// $dbname = "shop_phongthuy";
// $dbUsername = "root";
// $pwd = "";

// $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$dbUsername.$pwd);
// 
 $conn = mysqli_connect('localhost', 'root', '', 'shop_phongthuy');
	 mysqli_set_charset($conn, 'UTF8');

	 if(!$conn)
	 {
	   die("Không kết nối :" . mysqli_connect_error());
	  exit();

	 }
 ?>