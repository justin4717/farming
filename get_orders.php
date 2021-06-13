<?php
	include("connection.php");

	$orders = array();
	$sql1="select a.order_id,a.order_date,COUNT(b.id) AS item_count,a.total_amount AS amount,a.order_status AS status
	FROM orders a JOIN order_products b ON b.order_id = a.order_id
	WHERE a.user_id=".$_SESSION['user']." group by a.order_id order by a.order_id DESC";
    $p=mysqli_query($con,$sql1);
    while($row1 = mysqli_fetch_assoc($p)) {
		$orders[] = $row1;
	}
?>