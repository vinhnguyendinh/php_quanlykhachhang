<?php 
	// đăng xuất

	class controller_logout{
		public function __construct(){
			// hủy session và trở về trang đăng nhập
			unset($_SESSION["username"]);
			header("location:admin.php");
		}
	}
	new controller_logout();
 ?>