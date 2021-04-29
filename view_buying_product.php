<?php
	include("connection.php");
	$selected_prod = $_GET['product'];
	$buy_product = array();
	$buy_sql="select * FROM product_item Where product_item_id=".$selected_prod;
    $pr=mysqli_query($con,$buy_sql);
    while($row_buy = mysqli_fetch_assoc($pr)) {
		$buy_product[] = $row_buy;
	}
?>