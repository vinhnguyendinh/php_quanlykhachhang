<?php 
	class model{
		// lấy nhiều bản ghi từ csdl
		public function fetch($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}

		// lấy 1 bản ghi từ csdl
		public function fetch_one($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			return mysqli_fetch_array($result);
		}

		// thực thi câu lệnh sql
		public function execute($sql){
			global $link;
			$get_insert_id = 0;
			if(mysqli_query($link,$sql)==true)
				$get_insert_id = mysqli_insert_id($link);
			return $get_insert_id;
		}

		// đếm số bản ghi
		public function num_rows($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			return mysqli_num_rows($result);
		}

		// lấy id
		public function get_insert_id($id_name,$table_name){
			global $link;
			$result = mysqli_query($link,"select $id_name from $table_name order by $id_name desc limit 0,1");
			$row = mysqli_fetch_array($result);
			return $row;
		}
	}
 ?>