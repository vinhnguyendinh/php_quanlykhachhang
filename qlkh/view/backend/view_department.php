<!-- form danh sách cơ sở -->

<div class="col-md-10 col-md-offset-1">

	<!-- cửa sổ bật ra khi thêm cơ sở -->
	<div class="container">
	  <div class="btn btn-primary" style="margin-bottom: 5px;"><button style="background: transparent; border: none;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Thêm cơ sở mới</div>
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="modal-title">Cơ sở mới</h3>
	        </div>
	        <div class="modal-body">
	          <form method="post" enctype="multipart/form-data" action="admin.php?controller=add_edit_department&act=do_add">
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Tên</div>
					<div class="col-md-10"><input type="text" name="name" class="form-control" required></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Ghi chú</div>
					<div class="col-md-10"><textarea name="description" class="form-control" rows="5"></textarea></div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Ảnh</div>
					<div class="col-md-10">
						<input type="file" name="image">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Thêm" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
				</form>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- hiển thị danh sách cơ sở -->
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Danh sách cơ sở</h4></div>
		<div class="panel-body">
			<table class="table table-hover table-bordered" id="phongban">
				<thead><tr>
					<th class="col-md-1" style="text-align: center;">ID</th>
					<th class="col-md-2">Tên</th>
					<th class="col-md-2">Số khách hàng</th>
					<th>Ghi chú</th>
					<th style="text-align: center;">Ảnh</th>
					<th class="col-md-1"></th>
				</tr>
				</thead>
				<tfoot style="display: table-header-group;">
				<!-- đặt ô tìm kiếm lên đầu bảng -->
				<tr>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
	                <th><input type="text"></th>
					<th></th>
					<th></th>
            	</tr>
				</tfoot>
				<tbody>
				<?php
					// hiển thị lần lượt mỗi cơ sở 1 hàng
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td style="text-align: center;"><?php echo $rows["id"]; ?></td>
					<td><?php echo $rows["name"]; ?></td>
					<td style="text-align: center;"><?php echo $rows["number"]; ?></td>
					<td><?php echo $rows["description"]; ?></td>
					<td style="text-align: center;">
						<?php if(file_exists("public/upload/department/".$rows["image"])&&$rows["image"]!=""){ ?>
						<img src="public/upload/department/<?php echo $rows["image"]; ?>" style="width: 100px;">
						<?php } ?>
					</td>
					<td style="text-align: center;">
						<a href="admin.php?controller=add_edit_department&act=edit&id=<?php echo $rows["id"]; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
						<a href="admin.php?controller=department&act=delete&id=<?php echo $rows["id"]; ?>" onclick="return window.confirm('Xóa cơ sở này?');"><span class="glyphicon glyphicon-trash"></span></a>
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
    	// responsive
      $('#phongban').DataTable({
              responsive: true
      });

      // tìm kiếm bằng cách nhập dữ liệu theo từng trường
      var table = $('#phongban').DataTable();
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
    });
</script>
