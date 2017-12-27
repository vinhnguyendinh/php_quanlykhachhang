<?php 
	// đăng nhập

	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			// kiểm tra method = post
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				// lấy tên đăng nhập và mật khẩu từ form
				$username = $_POST["username"];
				$password = $_POST["password"];

				// lấy dữ liệu từ bảng admin, sẽ có 3 trường 0,1,2 tương ứng
				$check = $this->model->fetch_one("select username, password, fullname from tbladmin where username='$username'");

				// nếu trường số 0 (username) đúng 
				if(isset($check[0])){

					// kiểm tra mật khẩu - trường số 1
					// mật khẩu được lưu mã hóa nên cần phải để md5 để kiểm tra
					if($check[1] == md5($password)){
						// đặt session có tên "username" bằng tên đăng nhập để hiển thị trên menu
						$_SESSION["username"] = $username;
						// đặt session có tên "fullname" bằng họ tên đầy đủ để hiển thị trên trang chủ
						$_SESSION["fullname"] = $check[2];

						// trở về trang chủ
						header("location:admin.php");
					}
				}
				else{
					// nếu tên đăng nhập hoặc mật khẩu không đúng thì thông báo 
					echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
				}
			}
			// load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>