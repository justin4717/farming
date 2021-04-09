<?php
	include("connection.php");
    
	$post_item = array();

	$user=$_SESSION['user'];
	$sql_post="select post.post_id,post.post_content,post.post_image,post.created_at,name,tbl_like.like_id AS user_liked,
				count(lc.like_id) AS total_likes
				from post
				join users on users.user_id=post.user_id
				left join tbl_like on tbl_like.post_id=post.post_id AND tbl_like.user_id=".$_SESSION['user']."
										AND tbl_like.is_active=1
				left join tbl_like lc ON lc.post_id=post.post_id AND lc.is_active=1
				group by post.post_id
				order by post_id desc";
	$p=mysqli_query($con,$sql_post);
	while ($row_post = mysqli_fetch_assoc($p)) {
		$post_item[] = $row_post;
		# code...
	}

	$sql_state="SELECT * from state";
	$s=mysqli_query($con,$sql_state);
	while ($row_state = mysqli_fetch_assoc($s)) {
		$state_item[] = $row_state;
		# code...
	}


 	$sql_farming="SELECT * from farmin_type_master";
	$f=mysqli_query($con,$sql_farming);
	while ($row_farming = mysqli_fetch_assoc($f)) {
		$farming_item[] = $row_farming;
	}
		# code...

?>