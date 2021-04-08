<?php
	include("connection.php");
	session_start();
	$order_details = $_POST['details'];
	$bill_no = "SALE1";
	$sql="select id FROM orders ORDER BY id DESC LIMIT 1";
    $r=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($r);
    if (!empty($row)) {
    	$bill_no = "SALE".++$row['id'];
    }
    $order_data = array(
    	"order_no" => $bill_no,
    	"customer_id" => $_SESSION['user'],
    	"net_amount" => 0,
    	"order_status" => 0,
    	"created_by" => $_SESSION['user'],
    	"delete_status" => 0
    );
    $order_dtls = array();
    foreach ($order_details as $item_id => $dtl) {
    	$dtls = array(
    		"item_id" => $item_id,
    		"item_price" => $dtl['price'],
    		"item_qty" => $dtl['qty'],
    		"item_total_amt" => $dtl['price']*$dtl['qty'],
    		"delete_status" => 0
    	);
    	array_push($order_dtls, $dtls);
    	$order_data["net_amount"] += $dtls["item_total_amt"];
    }
    $sql="insert into orders (order_no,customer_id,net_amount,order_status,created_by,delete_status) VALUES ('".$order_data["order_no"]."','".$order_data["customer_id"]."','".$order_data["net_amount"]."', '".$order_data["order_status"]."', '".$order_data["created_by"]."', '".$order_data["delete_status"]."')";
    mysqli_query($con,$sql);
    $order_id = mysqli_insert_id($con);
    foreach ($order_dtls as $odtl) {
    	$sql="insert into order_details (order_id,item_id,item_price,item_qty,item_total_amt,delete_status) VALUES ('".$order_id."','".$odtl["item_id"]."','".$odtl["item_price"]."', '".$odtl["item_qty"]."', '".$odtl["item_total_amt"]."', '".$odtl["delete_status"]."')";
    	mysqli_query($con,$sql);
    }
    echo json_encode("success");
?>