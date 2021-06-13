<?php
include("Auth.php");
include("connection.php");

// Compute order items/ total
if(isset($_SESSION["shopping_cart"]) && !empty($_SESSION["shopping_cart"])) {
	$total_amount = 0;
	$pay_mode = $_POST['pay_mode'];
	$shipping_address = $_POST['shipping_address'];
	$phone = $_POST['phone'];
	$updt_shping_addr = $_POST['updt_shping_addr'];
	$order_status = 0;
	$order_items = array();
	$order_id = '';

	foreach ($_SESSION["shopping_cart"] as $key => $value) {
		if ($value['product_quantity']>0) {
			$item_array = array(
				'product_id' => $value["product_id"],  
				'product_name' => $value["product_name"],  
				'price' => $value["product_price"],  
				'quantity' => $value["product_quantity"],
				'total_amount' => round($value["product_quantity"]*$value["product_price"])
			);
			$order_items[] = $item_array;
			$total_amount += $item_array['total_amount'];
		}
	}

	if ($pay_mode == 0) {
		$order_status = 1;
	}
	$order_date = date('Y-m-d');
	$created_at = date('Y-m-d H:i:s');
	// Insert order
	$sql="insert into orders (user_id, customer_name, total_amount, pay_mode, shipping_address, phone, order_status, order_date, created_at) VALUES ('".$_SESSION['user']."', '".$_SESSION['name']."', '$total_amount', '$pay_mode', '$shipping_address', '$phone', '$order_status', '$order_date', '$created_at')";
    if(mysqli_query($con, $sql)) {
    	$order_id = mysqli_insert_id($con);
    	// Insert order products
    	foreach ($order_items as $item) {
    		$sql="insert into order_products (order_id, product_id, product_name, price, quantity, total_amount, shipping_status)
	VALUES ('$order_id', '".$item["product_id"]."', '".$item['product_name']."', '".$item['price']."', '".$item['quantity']."', '".$item['total_amount']."', '$order_status')";
			mysqli_query($con, $sql);
    	}
    	unset($_SESSION["shopping_cart"]);
    }

    // Update shipping address
    if ($updt_shping_addr) {
    	$sql=" UPDATE users
         SET shipping_address='$shipping_address' where user_id='".$_SESSION['user']."'";
        mysqli_query($con, $sql);
        $_SESSION['shipping_address'] = $shipping_address;
    }

    echo json_encode(["status" => "success", "order_id" => $order_id]);
} else {
	echo json_encode(["status" => "error"]);
}

?>