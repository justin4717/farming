<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th colspan="4" class="text-center">Product Summary</th>  
        </tr>
		<tr>  
            <th width="40%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%">Total</th>  
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right">$ '.$values["product_price"].'</td>
			<td align="right">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	}
	$output .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>  
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="4" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
/**
 * Shipping Address
 */
$output .= '
<div class="table-responsive" id="shipping_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th class="text-center">Shipping Address</th>  
        </tr>
';
$output .= '
    <tr>
    	<td class="text-left">
    		<textarea class="form-control" id="shipping_addr">'.$_SESSION['shipping_address'].'</textarea>
    		<br>
    		<input type="checkbox" id="update_shipping" value="1"/> <label>Update Shipping Address</label>
    	</td>
    </tr>
    ';
$output .= '
    <tr>
    	<td class="text-left">
    		<label>Phone: </label><input type="text" class="form-control" id="shipping_phone" value="'.$_SESSION['phone'].'"/>
    	</td>
    </tr>
    ';
$output .= '
    <tr>
    	<td class="text-left">
    		<label>Payment Method: </label>
    		<select class="form-control" id="pay_mode">
    			<option value="1">Online Payment</option>
    			<option value="0">Cash on Delivery</option>
    		</select>
    	</td>
    </tr>
    ';
$output .= '</table></div>';

/**
 * Checkout Actions
 */
$output .= '<div class="pull-right" id="checkout_actions">';
if (!empty($_SESSION["shopping_cart"])) {
	$output .= '<button class="btn btn-primary" id="pay_btn">Proceed to Pay</button>&nbsp;';
}
$output .= '<button class="btn btn-danger" data-dismiss="modal">Cancel</button>';
$output .= '</div>';
$data = array(
	'checkout_data'		=>	$output,
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);


?>