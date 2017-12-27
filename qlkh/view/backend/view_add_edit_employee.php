<!-- form thêm/sửa khách hàng -->

<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm/sửa khách hàng</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Tên</div>
					<div class="col-md-10">
						<!-- Nếu là thao tác sửa (có dữ liệu "name" truyền đến) thì điền tên đã có vào ô nhập, tương tự các thành phần khác -->
						<input type="text" name="name" value="<?php echo isset($arr["name"])?$arr["name"]:""; ?>" class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Năm sinh</div>
					<div class="col-md-10">
						<input type="number" name="birthYear" value="<?php echo isset($arr["name"])?$arr["birthYear"]:""; ?>" <?php echo isset($arr["name"])?"readonly":"required"; ?> class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">SĐT</div>
					<div class="col-md-10">
						<input type="number" name="phone" value="<?php echo isset($arr["name"])?$arr["phone"]:""; ?>" class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Email</div>
					<div class="col-md-10">
						<input type="email" name="email" value="<?php echo isset($arr["name"])?$arr["email"]:""; ?>" class="form-control">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Cơ sở</div>
					<div class="col-md-10">
						<select class="col-md-12" name="department_id">
						<?php
							// lấy tên cơ sở từ id
							$department = $this->model->fetch("select * from tbldepartment");
							foreach($department as $rows)
							{
						 ?>
							<option <?php echo isset($arr["department_id"])&&$arr["department_id"]==$rows["id"]?"selected":""; ?> value="<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px;">
					<div class="col-md-2">Kiểu khách hàng</div>
					<div class="col-md-10">
						<!-- Để sẵn Kiểu khách hàng cũ vào ô chọn Kiểu khách hàng -->
						<select class="col-md-12" name="position">
							<option <?php echo (isset($arr["name"])&&$arr["position"]=="Bình thường")?"selected":""; ?>>Bình thường</option>
							<option <?php echo (isset($arr["name"])&&$arr["position"]=="Thu nhập trung bình")?"selected":""; ?>>Thu nhập trung bình</option>
							<option <?php echo (isset($arr["name"])&&$arr["position"]=="Thu nhập khá")?"selected":""; ?>>Thu nhập khá</option>
							<option <?php echo (isset($arr["name"])&&$arr["position"]=="Thu nhập cao")?"selected":""; ?>>Thu nhập cao</option>
							<option <?php echo (isset($arr["name"])&&$arr["position"]=="VIP")?"selected":""; ?>>VIP</option>
						</select>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Thực hiện" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>
