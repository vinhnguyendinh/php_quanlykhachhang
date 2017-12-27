<!-- form chính bao gồm thanh menu sẽ hiển thị ở tất cả giao diện -->

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý khách hàng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <link href="public/backend/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
  <link href="public/backend/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
  <style type="text/css">
    body{
      background: url(public/backend/2.jpg);
      background-attachment: fixed;
    }
    select{
      border: 1px solid #ccc;
      border-radius: 4px;
      height: 34px;
    }
    tfoot input{
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      height: 34px;
    }
  </style>
  <script src="public/backend/jquery/dist/jquery.min.js"></script>
  <script src="public/backend/js/bootstrap.min.js"></script>
  <script src="public/backend/datatables/media/jquery.dataTables.min.js"></script>
  <script src="public/backend/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>QUẢN LÝ KHÁCH HÀNG</b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" style="margin-left: 30px;">
            <li><a href="index.php"><span class="glyphicon glyphicon-hand-left"></span>&nbsp;Về trang chủ</a></li>
            <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Admin</a></li>
            <li><a href="admin.php?controller=employee"><span class="glyphicon glyphicon-user"></span>&nbsp;Khách hàng</a></li>
            <li><a href="admin.php?controller=department"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Cơ sở</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span>&nbsp;<?php echo $_SESSION["username"] ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php"><span class="glyphicon glyphicon-hand-left"></span>&nbsp;Về trang chủ</a></li>
                <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Admin</a></li>
                <li style="margin-top: 5px;"><a href="admin.php?controller=employee"><span class="glyphicon glyphicon-user"></span>&nbsp;Khách hàng</a></li>
                <li style="margin-top: 5px;"><a href="admin.php?controller=department"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Cơ sở</a></li>
                <li class="divider"></li>
                <li style="margin-top: 5px;"><a href="admin.php?controller=logout" onclick="return window.confirm('Đăng xuất?');"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top: 80px;">
    	<?php
      // các file controller (bao gồm cả view) được load vào đây
    		if(file_exists("controller/backend/controller_$controller.php"))
    			include "controller/backend/controller_$controller.php";
    	 ?>
    </div>
</body>
</html>
