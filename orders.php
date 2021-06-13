<?php
include("Auth.php");

include("get_orders.php");

?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="user_home.php">E-Market</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
              
               <!-- <li class="nav-item active">
                    <a class="nav-link" href="category.html">Home <span class="sr-only">(current)</span></a>
                </li>-->
             
               
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a id="cart-popover" class="btn btn-success btn-sm ml-3"   data-placement="bottom" title="Shopping Cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge"></span>
                    <span class="total_price">$ 0.00</span>
                </a>
            </form>
            <ul class="navbar-nav  navbar-right " style="padding-left: 20px">
                <li>
                    <a href="orders.php" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-list-alt"></span> Order History
                    </a>
                </li>
                <li class="ml-3">
                    <a href="logout.php" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right" id="cart_actions" style="display:none;">
        <a href="#" class="btn btn-primary" id="check_out_cart">
        <span class="glyphicon glyphicon-shopping-cart"></span> Check out
        </a>
        <a href="#" class="btn btn-default" id="clear_cart">
        <span class="glyphicon glyphicon-trash"></span> Clear

        </a>
    </div>
</div>
<div class="modal fade" id="order_view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" style="width:100%;">Order #</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="order_loading" class="text-center" style="width: 100%;display: none;">
                    <i class="font-bold fa fa-spin fa-spinner" style="font-size: 45px;"></i>
                </div>
                <div id="order_fill"></div>
            </div>
        </div>
    </div>
</div>

<div id="display_item">


</div>
<br>
<br>

<div class="container ">
    <div class="row">

        <div class="col">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>  
                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Items</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <?php foreach( $orders as $order) :    ?>
                            <tr>
                                <td><?php echo $order["order_id"]; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($order["order_date"])); ?></td>
                                <td><?php echo $order["item_count"]; ?></td>
                                <td><?php echo $order["amount"]; ?></td>
                                <td>
                                    <?php
                                    if ($order["status"] == 0) {
                                        echo "Pending";
                                    } else if ($order["status"] == 1) {
                                        echo "Processing";
                                    } else if ($order["status"] == 2) {
                                        echo "Shipped";
                                    } else if ($order["status"] == 3) {
                                        echo "Delivered";
                                    } else if ($order["status"] == 4) {
                                        echo "Cancelled";
                                    } else {
                                        echo "Failed";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-primary" onclick="viewOrder('<?php echo $order["order_id"]; ?>')">View</button>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<br>

<!-- Footer -->

<style type="text/css">
    /*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
.card{
    margin-bottom: 5px;
}
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 487px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
}
#checkout .modal-dialog {
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top:50%;
    margin: 0 auto;
    width: 100%;
}
</style>

<script type="text/javascript">
    $('.prd-buy').click(function(){
        var product_id = $(this).data('product');
        location.href="view_product.php?product="+product_id;
    });
    
 
$(document).ready(function(){

    

    load_cart_data();

    function load_cart_data()
    {
        $.ajax({
            url:"fetch_cart.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                $('#cart_details').html(data.cart_details);
                $('.total_price').text(data.total_price);
                $('.badge').text(data.total_item);
                if (data.total_item>0) {
                    $('#cart_actions').show();
                } else {
                    $('#cart_actions').hide();
                }
            }
        });
    }

    $('#cart-popover').popover({
        html : true,
        container: 'body',
        content:function(){
            return $('#popover_content_wrapper').html();
        }
    });

    $(document).on('click', '.add_to_cart', function(){
        var product_id = $(this).attr("id");
        var product_name = $('#name'+product_id+'').val();
        var product_price = $('#price'+product_id+'').val();
        var product_quantity = $('#quantity'+product_id).val();
        var action = "add";
        if(product_quantity > 0)
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
                success:function(data)
                {
                    $('#cart-popover').popover('hide');
                    load_cart_data();
                    alert("Item has been Added into Cart");
                }
            });
        }
        else
        {
            alert("lease Enter Number of Quantity");
        }
    });

    $(document).on('click', '.delete', function(){
        var product_id = $(this).attr("id");
        var action = 'remove';
        if(confirm("Are you sure you want to remove this product?"))
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{product_id:product_id, action:action},
                success:function()
                {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    alert("Item has been removed from Cart");
                }
            })
        }
        else
        {
            return false;
        }
    });

    $(document).on('click', '#clear_cart', function(){
        var action = 'empty';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{action:action},
            success:function()
            {
                load_cart_data();
                $('#cart-popover').popover('hide');
                alert("Your Cart has been clear");
            }
        });
    });

      $(document).on('click', '#check_out_cart', function(){
        $('#cart-popover').popover('hide');
        $('#checkout').modal('show');
        $('#order_loading').show();

        $.ajax({
            url:"cart_checkout.php",
            method:"POST",
            dataType:'json',
            data:{},
            success:function(resp)
            {
                $('#order_loading').hide();
                $('#order_fill').html(resp.checkout_data);
            }
        });
    });

      $(document).on('change', '#pay_mode', function(){
        if ($(this).val() === 1) {
            $('#pay_btn').text("Proceed to Pay");
        } else {
            $('#pay_btn').text("Confirm Order");
        }
      });

      $(document).on('click', '#pay_btn', function(){
        $('#checkout_actions').hide();
        $('#order_fill').hide();
        $('#order_loading').show();

        let shipping_address =  $('#shipping_addr').val();
        let phone =  $('#shipping_phone').val();
        let updt_shping_addr =  $('#update_shipping').val();
        let pay_mode =  $('#pay_mode').val();

        if (shipping_address=='' || phone=='' || pay_mode=='') {
            alert("Please Fill All Details !");
            $('#checkout_actions').show();
            $('#order_fill').show();
            $('#order_loading').hide();
            return;
        }
        $.ajax({
            url:"order_confirm.php",
            method:"POST",
            dataType:'json',
            data:{
                'pay_mode': pay_mode,
                'shipping_address': shipping_address,
                'phone': phone,
                'updt_shping_addr': updt_shping_addr
            },
            success:function(resp)
            {
                $('#checkout_actions').show();
                $('#order_fill').show();
                $('#order_loading').hide();
                if (resp.status == 'success') {
                    $('#checkout').modal('hide');
                    if (pay_mode == 0) {
                        alert("Order Placed Successfully");
                        location.href="user_home.php";
                    } else {
                        alert("Proceed to pay");
                    }
                } else {
                    alert("Something Error Occured !");
                }
            }
        });
      });
});

function viewOrder(order_id) {
    $('#order_view').modal('show');
    $('#order_loading').show();
    $.ajax({
        url:"order_view.php",
        method:"POST",
        dataType:'json',
        data:{order_id: order_id},
        success:function(resp)
        {
            $('#order_loading').hide();
            $('#order_fill').html(resp.order_data);
        }
    });
}

</script>