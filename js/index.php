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
				<h1>Create Class <small>Coding Task</small> </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" action="upload.php">
						<div class="form-group">
						    <label for="inputdefault">Name</label>
						    <input class="form-control" name="name" type="text">
						</div>
						<div class="form-group">
						    <label for="inputdefault">Team name</label>
						    <input class="form-control" name="Tname" type="text">
						</div>
						<div class="form-group">
						    <label for="inputdefault">Phone number</label>
						    <input class="form-control" name="phone" type="number">
						</div>
						<div class="form-group">
						    <label for="inputdefault">Mentor name</label>
						    <input class="form-control" name="Mname" type="text">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Select files to upload:</label>
							<input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
							<p class="help-block"><span class="label label-info">Note:</span> Please, Upload the .c, .cpp file and within the size of 50KB only.</p>
						</div>			
						<button type="submit" class="btn btn-primary" name="btnSubmit" >Start Upload</button>
						<!-- <a href="view.php" class="btn btn-info">Show Uploaded Files</a> -->
					</form>
					<br/>
					<a href="login.php">Login link for mentors</a>
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