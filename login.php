<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CREATE CLASSES</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</header>
	<body>
		<div class="container">			
			<div class="page-header">
				<h1>Create Class <small>Login (for mentors)</small> </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="login_start.php">
						<div class="form-group">
						    <label for="inputdefault">Login ID</label>
						    <input class="form-control" name="username" type="text">
						</div>
						<div class="form-group">
						    <label for="inputdefault">password</label>
						    <input class="form-control" name="password" type="password">
						</div>
						<button type="submit" class="btn btn-primary" name="login_btn" >Log IN</button>
					</form>
					<br/>
				</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
	</body>
</html>