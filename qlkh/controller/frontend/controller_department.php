<?php 
	// danh sách phòng ban

	class controller_department extends controller{
		public function __construct(){
			parent::__construct();			
			$arr = $this->model->fetch("select *,(SELECT COUNT(id) FROM tblemployee where department_id=tbldepartment.id) as 'number' from tbldepartment");
			//load view
			include "view/frontend/view_department.php";
		}
	}
	new controller_department();
 ?>