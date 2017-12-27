<!-- form danh sách khách hàng -->

<div class="col-md-12">
	<!-- nút thêm khách hàng -->
	<div class="btn-group" style="margin-bottom: 5px;">
	  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	    	<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;
	    	Thêm khách hàng mới
	    	<span class="caret"></span>
	  </button>

	  <!-- là menu sổ xuống gồm 2 lựa chọn thêm từ form và import file -->
	  <ul class="dropdown-menu" role="menu">
	    <li><a href="admin.php?controller=add_edit_employee&act=add"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Thêm từ form</a></li>
	    <li><a href="admin.php?controller=import_employee&act=import"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Import file</a></li>
	  </ul>
	</div>

	<!-- bảng danh sách khách hàng -->
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Danh sách khách hàng</h4></div>
		<div class="panel-body">
			<table id="nhanvien" class="table table-hover table-bordered">
				<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-2">Tên</th>
					<th>Năm sinh</th>
					<th>SĐT</th>
					<th class="col-md-2">Email</th>
					<th>Cơ sở</th>
					<th>Kiểu khách hàng</th>
					<th class="col-md-1"></th>
				</tr>
				</thead>
				<tfoot>
				<tr>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
					<th></th>
            	</tr>
				</tfoot>
				<tbody>
				<?php
				// hiển thị lần lượt mỗi khách hàng 1 hàng
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td><?php echo $rows["id"]; ?></td>
					<td><?php echo $rows["name"]; ?></td>
					<td><?php echo $rows["birthYear"]; ?></td>
					<td><?php echo $rows["phone"]; ?></td>
					<td><?php echo $rows["email"]; ?></td>
					<td>
						<?php
							// lấy tên cơ sở theo id
							$department = $this->model->fetch_one("select name from tbldepartment where id=".$rows["department_id"]);
							// nếu cơ sở bị xóa thì hiện chưa có
							echo isset($department["name"])?$department["name"]:"(Chưa có)";
						 ?>
					</td>
					<td>
						<?php
						// cơ sở bị xóa thì vị trí cũng coi là chưa có
						echo isset($department["name"])?$rows["position"]:"(Chưa có)"
						?>
					</td>
					<td style="text-align: center;">
						<a href="admin.php?controller=add_edit_employee&act=edit&id=<?php echo $rows["id"]; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
						<a href="admin.php?controller=employee&act=delete&id=<?php echo $rows["id"]; ?>" onclick="return window.confirm('Xóa khách hàng này?');"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- đoạn javascript cho các thao tác tìm kiếm, sắp xếp phân trang -->
<script>
    $(document).ready(function() {
    	// table responsive
      $('#nhanvien').DataTable({
              responsive: true
      });

      // tìm kiếm bằng cách nhập dữ liệu theo từng trường (cuối bảng)
      var table = $('#nhanvien').DataTable();
      table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                      .search( this.value )
                      .draw();
                  }
              } );
          } );

          // 2 hàng cơ sở và vị trí sử dụng select box
          table.columns([5,6]).every( function () {
              var column = this;
              var select = $('<select style="width:100%;"><option value=""></option></select>')
                  .appendTo( $(column.footer()).empty() )
                  .on( 'change', function () {
                      var val = $.fn.dataTable.util.escapeRegex(
                          $(this).val()
                      );

                      column
                          .search( val ? '^'+val+'$' : '', true, false )
                          .draw();
                  } );

              column.data().unique().sort().each( function ( d, j ) {
                  select.append( '<option value="'+d+'">'+d+'</option>' )
              } );
          } );
    });
</script>
