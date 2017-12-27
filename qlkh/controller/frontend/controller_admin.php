<?php 
	// danh sách admin

	class controller_admin extends controller{
		public function __construct(){
			parent::__construct();			
			$arr = $this->model->fetch("select * from tbladmin");
			//load view
			include "view/frontend/view_admin.php";
		}
	}
	new controller_admin();
 ?>