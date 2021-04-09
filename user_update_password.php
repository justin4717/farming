<?php
include("connection.php");
$pas="";
$id=$_SESSION['user'];
 $pas=$_POST['pas'];
 $Sql_Password=" UPDATE users_login
SET password='".$pas."'
WHERE user_login_id=$id and role='1' ";
mysqli_query($con,$Sql_Password) ;
?>