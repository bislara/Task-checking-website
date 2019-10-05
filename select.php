<?php 
session_start();      
if($_SESSION['login_user']!="cyborg_admin")
         header("location: login.php");
?>

<?php 

$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","create_class_task");	
$query = "SELECT correct FROM task WHERE Id='".$id."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if($row["correct"]==0)
{
	$q="UPDATE task SET correct=1 WHERE Id='".$id."'";
	$res = mysqli_query($conn, $q);
}
elseif ($row["correct"]==1) {
	$q="UPDATE task SET correct=0 WHERE Id='".$id."'";
	$res = mysqli_query($conn, $q);		
	}	
    header("location: view.php");

 ?>