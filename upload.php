<?php
	if(isset($_POST["btnSubmit"])){	

		$name=$_POST["name"];
		$Tname=$_POST["Tname"];
		$phone=$_POST["phone"];
		$Mname=$_POST["Mname"];

		// echo $_POST["Mname"];
		$errors = array();
		
		$extension = array("c","cpp");
		
		$bytes = 1024;
		$allowedKB = 50;
		$totalBytes = $allowedKB * $bytes;
		
		if(isset($_FILES["files"])==false)
		{
			echo "<b>Please, Select the files to upload!!!</b>";
			return;
		}
		
		$conn = mysqli_connect("localhost","root","","create_class_task");	
		
		$i=0;
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;
			
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}				
			
			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 100KB. Name:- ".$file_name);
				$uploadThisFile = false;
			}
			
			if($uploadThisFile){
				// $filename=basename($file_name,$ext);
				$filename=strval($name).strval($i);
				$newFileName=$filename.".".$ext;				
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
				
				$query = "INSERT INTO task(Name,Team_Name,Phone_number,Mentor_Name,FilePath,FileName) VALUES('".$name."','".$Tname."','".$phone."','".$Mname."','Upload','".$newFileName."')";
				echo $filename;
				echo "uploaded";
				mysqli_query($conn, $query);			
			}
			$i++;
		}
		
		mysqli_close($conn);
		
		$count = count($errors);
		
		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}		
	}
	else
	{
		echo "Please enter all the details";
	}
?>