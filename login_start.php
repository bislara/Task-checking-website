<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_btn"])) {
      
      $myusername=$_POST["username"];
      $mypassword=$_POST["password"];

      // echo $mypassword;
      // $myusername = mysqli_real_escape_string($db,$_POST['username']);
      // $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      session_start();      
      if($myusername == "cyborg_admin" && $mypassword=="create_class_mentor") {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo $_SESSION['login_user'];
         header("location: view.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
         header("location: login.php");
      }
   }
   else
   {
      echo "Enter correct details";
   }
?>