 <?php 
 	// trang chính: danh sách admin

	class controller_home extends controller{
		public function __construct(){
			parent::__construct();
			// lấy tất cả admin
			$arr = $this->model->fetch("select * from tbladmin");
			//load view
			include "view/backend/view_home.php";
		}
	}
	new controller_home();
 ?>