<?php 
	// danh sách khách hàng

	class controller_employee extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:""; // lấy biến act

			// nếu có id được truyền thì lấy
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){

				// nếu act = delete thì thực hiện xóa khách hàng
				case "delete":
					// thực hiện xóa khách hàng với id lấy được
					$this->model->execute("delete from tblemployee where id=$id");
					// trở về trang danh sách khách hàng
					header("location:admin.php?controller=employee");
				break;
			}

			// thực hiện lấy tất cả khách hàng
			$arr = $this->model->fetch("select * from tblemployee");
			//load view
			include "view/backend/view_employee.php";
		}
	}
	new controller_employee();
 ?>
