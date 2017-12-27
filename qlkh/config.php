<?php 
	// config CSDL

	$hostname = "localhost"; // host phpmyadmin
	$username = "root"; // tên đăng nhập
	$password = ""; // mật khẩu
	$database = "employee"; // tên CSDL
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
 ?>