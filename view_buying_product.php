<?php
	$buy_product = array();
	$buy_sql="select * FROM product_item Where ";
    $pr=mysqli_query($con,$buy_sql);
    while($row_buy = mysqli_fetch_assoc($pr)) {
		$buy_product[] = $row_buy;
	}
?>