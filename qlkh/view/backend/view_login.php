<!-- form login -->

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<style type="text/css">
		body{
	      background: url(public/backend/2.jpg);
	      background-attachment: fixed;
	    }
	</style>
</head>
<body>
<div class="container" style="margin-top: 30px;">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="">
					<!-- row -->
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-2">Username</div>
						<div class="col-md-10"><input type="text" name="username" required class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-10"><input type="password" name="password" required class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-2"></div>
						<div class="col-md-10"><input type="submit" value="Login" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger"></div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</di>
</div>
</body>
</html>
