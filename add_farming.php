<?php
include("Auth.php");
include("connection.php");
$farming=$_POST['farming'];
$sq="insert into  farmin_type_master (farming_type_name) values('$farming')";
mysqli_query($con,$sq);
header("location:farming_type.php");

mysqli_close($con);
?>