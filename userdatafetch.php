<?php
	include("connection.php");

$sql="SELECT users.name,users.email,users.phone,users.is_active
FROM users
INNER JOIN users_login ON users_login.user_id=users.user_id where users_login.role='1'";
    $r=mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($r)) {
		$items[] = $row;
	}
$sq="SELECT COUNT(users.user_id) as usercount FROM users
		INNER JOIN users_login ON users_login.user_id=users.user_id
		where users_login.role='1'";
 $r=mysqli_query($con,$sq);
$u_row = mysqli_fetch_array($r);
$user_count = $u_row['usercount'];


$s="SELECT COUNT(post_id) as postcount FROM post";
 $r=mysqli_query($con,$s);
 $p_row = mysqli_fetch_array($r);
 $post_count = $p_row['postcount'];




?>