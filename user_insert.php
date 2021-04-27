<?php
include("Auth.php");
include("connection.php");

$nam=$_POST['na'];
$role="2";
$ema=$_POST['em'];
$unam=$_POST['una'];
$pas=$_POST['pa'];
$phone=$_POST['ph'];

$u="select user_name from users_login where user_name='$unam'";
$res=mysqli_query($con,$u);
if($row=mysqli_num_rows($res)==0)
{
$sql="insert into  users (name,email,phone) values('$nam','$ema',$phone)";
mysqli_query($con,$sql) ;
$n=mysqli_insert_id($con);
$sq="insert into  users_login (user_name,password,role,user_id) values('$unam','$pas','$role',$n)";
echo $sq;
if(mysqli_query($con,$sq))
{
	header("location:customer_login.php");
}
}
else
{
	echo"username exist";
}
mysqli_close($con);
?>	