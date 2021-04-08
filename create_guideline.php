<?php
include("Auth.php");
include("connection.php");
$title=$_POST['title'];
$small=$_POST['small_description'];
$content=$_POST['content'];
$sql="insert into  guideline (guideline_title,guideline_desc,guideline_content) values('$title','$small','$content')";
mysqli_query($con,$sql);
header("location:guideline.php");


mysqli_close($con);
?>	