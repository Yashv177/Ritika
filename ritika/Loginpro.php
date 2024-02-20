<?php
include('Components/config_db.php');
if(isset($_POST['username']) && isset($_POST['password'])){
   function validate($data){
         $data = trim($data);
         $data = stripcslashes($data);
         $data = htmlspecialchars($data);
         return $data;
   }

   $username = validate($_POST['username']);
   $password = validate($_POST['password']);
   if(empty($username)){
      header('location:Login.php?error= username is required');
      exit();
   }elseif(empty($password)){
      header('location:Login.php?error= password is required');
      exit();
   }else{
      $username = $_POST['username'];
$password = $_POST['password']; 
   echo $sql = "SELECT * from login where username='".$username."' and password=MD5('".$password."')";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   if($row['username']){
	   session_start();
	   $_SESSION['username']=$row['username'];
	   $_SESSION['name']=$row['name'];
	   header('location:Admin.php');
   }else{
      header('location:Login.php?error= invlid input');
   exit();
   }
   }
      
}else{
  header('location:Login.php?err=1');   
   }
?>