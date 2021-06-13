<?php
include("get_order.php");


$output = '';
$data = array(
	'order_data'		=>	$output
);	

echo json_encode($data);

?>