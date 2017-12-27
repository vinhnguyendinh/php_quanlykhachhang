<?php
	// import khách hàng

	class controller_import_employee extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:""; // lấy biến act
			switch($act){

				// nếu act = import thì thực hiện
				case "import":
					// chỉ đến do_import
					$form_action = "admin.php?controller=import_employee&act=do_import";

					// load view
					include "view/backend/view_import_employee.php";
				break;

				// thực hiện import
				case "do_import":
					// lấy tên file
					$filename=$_FILES["file"]["tmp_name"];

					// kiểm tra định dạng csv
					$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
					$expensions= array("csv");
					$count = 0; // dùng để đếm số bản ghi

					// nếu file không rỗng và đúng là file .csv thì thực hiện đọc từ file và thêm vào CSDL
					if($_FILES["file"]["size"] > 0)
					{
						$file = fopen($filename, "r");
						while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
						{
							$this->model->execute("insert into tblemployee(`name`, `birthYear`, `phone`, `email`, `department_id`, `position`) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')");
							$count = $count +1; // đếm số bản ghi
						}
						fclose($file);

						// thông báo thành công và trở về trang danh sách khách hàng
						echo "<script> alert('Import thành công ".$count." bản ghi');
						window.location.href = 'admin.php?controller=employee';</script>";
					}

					// nếu có lỗi thì thông báo và ở lại trang import
					else{
						echo "<script> alert('Có lỗi xảy ra. Vui lòng thử lại.');
						window.location.href = 'admin.php?controller=import_employee&act=import';</script>";
					}

				break;
			}
		}
	}
	new controller_import_employee();
 ?>
