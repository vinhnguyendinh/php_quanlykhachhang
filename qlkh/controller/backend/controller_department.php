<?php 
	// danh sách cơ sở

	class controller_department extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:""; // lấy biến act

			// nếu có id được truyền thì lấy
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){

				// nếu act = delete thì thực hiện xóa cơ sở
				case "delete":
					// xóa ảnh cũ trong folder
					$arr_old_img = $this->model->fetch_one("select image from tbldepartment where id=$id");
					$old_img = $arr_old_img["image"];
					if(file_exists("public/upload/department/$old_img"))
						unlink("public/upload/department/$old_img");

					// thực hiện xóa cơ sở với id lấy được
					$this->model->execute("delete from tbldepartment where id=$id");

					// xóa cơ sở thì dữ liệu cơ sở và vị trí trong bảng khách hàng cũng bị xóa
					$this->model->execute("update tblemployee set department_id=0, position=null where department_id=$id");

					// trở về trang danh sách cơ sở
					header("location:admin.php?controller=department");
				break;
			}

			// lấy danh sách tất cả cơ sở, lấy thêm số khách hàng mỗi phòng
			$arr = $this->model->fetch("select *,(SELECT COUNT(id) FROM tblemployee where department_id=tbldepartment.id) as 'number' from tbldepartment");
			//load view
			include "view/backend/view_department.php";
		}
	}
	new controller_department();
 ?>
