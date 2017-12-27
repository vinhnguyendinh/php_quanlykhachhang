<!-- form sửa cơ sở -->

<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm/sửa cơ sở</div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<!-- Nếu là thao tác sửa (có dữ liệu "id" truyền đến) thì điền id đã có vào ô nhập, tương tự các thành phần khác -->
				<div class="col-md-2">ID</div>
				<div class="col-md-10"><input type="text" name="id" value="<?php echo $arr["id"];?>" class="form-control" readonly></div>
				<!-- trường này không được sửa nên sẽ để readonly -->
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2">Tên</div>
				<div class="col-md-10"><input type="text" name="name" value="<?php echo $arr["name"];?>" class="form-control" required></div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2">Số khách hàng</div>
				<div class="col-md-10"><input type="text" value="<?php echo $arr["number"];?>" class="form-control" readonly></div>
			</div>
			<!-- end row -->

			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2">Ghi chú</div>
				<div class="col-md-10">
				<textarea name="description" class="form-control" rows="5"><?php echo $arr["description"];?></textarea>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Ảnh</div>
					<div class="col-md-10">
						<?php
							// nếu đã có ảnh hì hiển thị
							if(isset($arr["image"])&&file_exists("public/upload/department/".$arr["image"]))
							{
						 ?>
						 <img src="public/upload/department/<?php echo $arr["image"]; ?>" style='width:150px;'>
						 <?php } ?>
					</div>
				</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="file" name="image">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Cập nhật" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-danger">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
