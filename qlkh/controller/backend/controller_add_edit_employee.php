<?php 
	// thêm sửa khách hàng

	class controller_add_edit_employee extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:""; // lấy biến "act"
			switch($act){

				// sửa khách hàng
				case "edit":
					// nếu có id được truyền thì lấy
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

					//lấy ra khách hàng có id đó
					$arr = $this->model->fetch_one("select * from tblemployee where id=$id");

					// chỉ đến do_edit
					$form_action = "admin.php?controller=add_edit_employee&act=do_edit&id=$id";

					// load view
					include "view/backend/view_add_edit_employee.php";
				break;

				// thực hiện chỉnh sửa khách hàng
				case "do_edit":
					// nếu có id được truyền thì lấy
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

					// lấy dữ liệu từ form
					$name = mysql_escape_string($_POST["name"]);
					$phone = $_POST["phone"];
					$email = mysql_escape_string($_POST["email"]);
					$department_id = $_POST["department_id"];
					$position = mysql_escape_string($_POST["position"]);

					// kiếm tra xem email và SĐT đã được sử dụng bởi khách hàng khác chưa
					$checkEmail = $this->model->num_rows("select email from tblemployee where email='$email' and id!=$id");
					$checkPhone = $this->model->num_rows("select phone from tblemployee where phone=$phone and id!=$id");

					// nếu rồi thì thông báo và ở lại trang chỉnh sửa
					if ($checkPhone > 0){
						echo "<script> alert('SĐT này đã được sử dụng');
						window.location.href = 'admin.php?controller=add_edit_employee&act=edit&id=$id';</script>";
					}
					else if ($checkEmail > 0){
						echo "<script> alert('Email này đã được sử dụng');
						window.location.href = 'admin.php?controller=add_edit_employee&act=edit&id=$id';</script>";
					}

					// nếu không trùng thì tiến hành chỉnh sửa
					else{
						// thực thi câu lệnh chỉnh sửa
						$this->model->execute("update tblemployee set name='$name', phone='$phone', email='$email', department_id=$department_id, position='$position' where id=$id");
						// về trang danh sách khách hàng
						header("location:admin.php?controller=employee");
					}

				break;

				// thêm khách hàng
				case "add":
					// chỉ đến do_add
					$form_action = "admin.php?controller=add_edit_employee&act=do_add";
					// load view
					include "view/backend/view_add_edit_employee.php";
				break;

				// thực hiện thêm khách hàng
				case "do_add":
					// lấy dữ liệu từ form
					$name = $_POST["name"];
					$birthYear = $_POST["birthYear"];
					$phone = $_POST["phone"];
					$email = $_POST["email"];
					$department_id = $_POST["department_id"];
					$position = $_POST["position"];

					// kiếm tra xem email và SĐT đã được sử dụng chưa, rồi thì thông báo và trở lại trang thêm khách hàng
					$checkEmail = $this->model->num_rows("select email from tblemployee where email='$email'");
					$checkPhone = $this->model->num_rows("select phone from tblemployee where phone=$phone");
					if ($checkPhone > 0){
						echo "<script> alert('SĐT này đã được sử dụng');
						window.location.href = 'admin.php?controller=add_edit_employee&act=add';</script>";
					}
					else if ($checkEmail > 0){
						echo "<script> alert('Email này đã được sử dụng');
						window.location.href = 'admin.php?controller=add_edit_employee&act=add';</script>";
					}

					// không trùng thì tiến hành thêm
					else{
						// thực thi câu lệnh thêm
						$this->model->execute("insert into tblemployee(name,birthYear,phone,email,department_id,position) values('$name',$birthYear,'$phone','$email',$department_id,'$position')");
						// trở về giao diện xem danh sách khách hàng
						header("location:admin.php?controller=employee");
					}
				break;
			}
		}
	}
	new controller_add_edit_employee();
 ?>
