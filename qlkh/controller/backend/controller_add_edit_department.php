<?php
	// thêm sửa cơ sở

	class controller_add_edit_department extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:""; // lấy biến "act"
			switch($act){

				// sửa cơ sở
				case "edit":
					// nếu có id được truyền thì lấy
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

					//lấy ra cơ sở có id đó
					$arr = $this->model->fetch_one("select *,(SELECT COUNT(id) FROM tblemployee where department_id=tbldepartment.id) as 'number' from tbldepartment where id=$id");

					// chỉ đến do_edit
					$form_action = "admin.php?controller=add_edit_department&act=do_edit&id=$id";

					// load view
					include "view/backend/view_add_edit_department.php";
				break;

				// thực hiện sửa cơ sở
				case "do_edit":
					// nếu có id được truyền thì lấy
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

					// lấy dữ liệu từ form
					$name = $_POST["name"];
					$description = $_POST["description"];

					// kiếm tra xem tên này đã được sử dụng bởi phòng khác chưa
					$check = $this->model->num_rows("select name from tbldepartment where name='$name' and id!=$id");

						// nếu có rồi thì thông báo
						if ($check > 0){
							echo "<script>
									alert('Phòng này đã có');
									window.location.href = 'admin.php?controller=add_edit_department&act=edit&id=".$id."';
								  </script>";
						}

						// nếu chưa thì thực hiện sửa
						else {
							// upload ảnh nếu có
							if($_FILES["image"]["name"] != ""){
								// xóa ảnh cũ
								$arr_old_img = $this->model->fetch_one("select image from tbldepartment where id=$id");
								$old_img = $arr_old_img["image"];
								if(file_exists("public/upload/department/$old_img"))
									unlink("public/upload/department/$old_img");
								// up ảnh mới
								$image = time().$_FILES["image"]["name"];
								move_uploaded_file($_FILES["image"]["tmp_name"], "public/upload/department/$image");
								$this->model->execute("update tbldepartment set image='$image' where id=$id");
							}
							// thực thi câu lệnh sql cập nhật
							$this->model->execute("update tbldepartment set name='$name', description='$description' where id=$id");
							// trở về trang danh sách cơ sở
							header("location:admin.php?controller=department");
						}
				break;

				// thêm cơ sở
				case "add":
					// chỉ đến do_add
					$form_action = "admin.php?controller=add_edit_department&act=do_add";
					// load view
					include "view/backend/view_add_edit_department.php";
				break;

				// thực hiện thêm cơ sở
				case "do_add":
					// lấy dữ liệu
					$name = $_POST["name"];
					$description = $_POST["description"];
					$image = "";

					// kiếm tra xem tên này đã được sử dụng chưa
					$check = $this->model->num_rows("select name from tbldepartment where name='$name'");
					// nếu rồi thì thông báo và quay lại form sửa
						if ($check > 0){
							echo "<script>
									alert('Phòng này đã có');
									window.location.href = 'admin.php?controller=department';
								  </script>";
						}

						// nếu chưa thì tiếp tục
						else{
							// upload ảnh
							if($_FILES["image"]["name"] != ""){
								$image = time().$_FILES["image"]["name"];
								move_uploaded_file($_FILES["image"]["tmp_name"], "public/upload/department/$image");
							}
							// thực thi câu lệnh thêm
							$this->model->execute("insert into tbldepartment(name,description,image) values('$name','$description','$image')");
							// trở về trang danh sách cơ sở
							header("location:admin.php?controller=department");
						}
				break;
			}
		}
	}
	new controller_add_edit_department();
 ?>
