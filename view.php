<?php 
session_start();      
if($_SESSION['login_user']!="cyborg_admin")
         header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			.images{
				width:15px;
				height:15px;
				cursor:pointer;
				margin:10px;
			}
			.images:hover{
				-webkit-transform: scale(1.2);
				-moz-transform: scale(1.2);
				-o-transform: scale(1.2);
				transform: scale(1.2);
				transition: all 0.3s;
				-webkit-transition: all 0.3s;
			}
		</style>
	</header>
	<body>
		<div class="container">			
			<div class="page-header">
				<h1>Uploaded Files </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="index.php" class="btn btn-info">Go Back</a>
					<a href="logout.php" class="btn btn-info">Logout</a>

					<!-- <h3>Uploaded Files:</h3> -->
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","create_class_task");
						
						$query = "SELECT *FROM task";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							echo '<table style="width:100%;">';
							echo "<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Team_name</th>
							<th>Mentor</th>
							<th>correct</th>
							<th>Select</th>
							</tr>";
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["FilePath"]."/".$row["FileName"];
					?>
								<!-- <a href="<?php echo $url; ?>"> -->
									
								<tr>
									<td>
										<?php echo $row["Id"]; ?>
									</td>
									<td>
										<div class="images">
										<a href="<?php echo $url; ?>">
										<?php echo $row["Name"]; ?>
									</a>
									</div>
									</td>
									<td>
										<?php echo $row["Team_Name"]; ?>
									</td>
									<td>
										<?php echo $row["Mentor_Name"]; ?>
									</td>
									<td>
										<?php echo $row["correct"]; ?>
									</td>
									<td>
										<!-- <?php echo $row["Id"]; ?> -->
										<a href="select.php?id=<?php echo $row["Id"] ?>" class="btn btn-info">Select</a>
									</td>
								</tr>
									 <!-- <?php echo $row["Name"];?> -->
								<!-- </div> -->
					<?php
							}
							echo "</table>";
						}
						else
						{
					?>
						<p>There are no files uploaded to display.</p>
					<?php
						}
					?>					
				</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>		
	</body>
</html>