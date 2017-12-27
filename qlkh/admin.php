<?php 
	// bắt đầu session của admin
	session_start();

	// load các file
	include "config.php";
	include "application/controller.php";
	include "application/model.php";
	
	// bắt buộc phải đăng nhập
	if(isset($_SESSION["username"]) == false)
		include "controller/backend/controller_login.php";
	else{
		$controller = isset($_GET["controller"])?$_GET["controller"]:"home";
		include "view/backend/view_layout.php";
	}
 ?>