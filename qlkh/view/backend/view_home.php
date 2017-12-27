<!-- trang chủ là danh sách admin -->

<div class="col-md-10 col-md-offset-1">

<!-- họ tên admin được hiển thị trên đầu lấy từ session -->
<h1 style="text-align: center;"><span class="label label-success">Xin chào <?php echo $_SESSION["fullname"] ?></span></h1>

	<!-- danh sách các admin -->
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Danh sách admin</h4></div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead><tr>
					<th style="text-align: center;">Ảnh</th>
					<th class="col-md-1" style="text-align: center">ID</th>
					<th class="col-md-2">Họ Tên</th>
					<th class="col-md-2">Tên đăng nhập</th>
					<th class="col-md-2">Email</th>
					<th>Ghi chú</th>
				</tr>
				</thead>
				<tbody>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
				<tr>
					<td style="text-align: center;">
						<?php if(file_exists("public/upload/admin/".$rows["image"])&&$rows["image"]!=""){ ?>
						<img src="public/upload/admin/<?php echo $rows["image"]; ?>" style="width: 100px;">
						<?php } ?>
					</td>
					<td style="text-align: center"><?php echo $rows["id"]; ?></td>
					<td><?php echo $rows["fullName"]; ?></td>
					<td><?php echo $rows["username"]; ?></td>
					<td><?php echo $rows["email"]; ?></td>
					<td><?php echo $rows["description"]; ?></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>