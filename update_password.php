<?php
include("Auth.php");
include("connection.php");


 $id= $_SESSION['user'];
 $pas = $_POST['pass'];
 
 $Sql_Password=" UPDATE users_login
SET password='$pas'
WHERE user_id= '$id'	 and role='0' ";
mysqli_query($con,$Sql_Password) ;
header("location:admin_change_password.php");
?>