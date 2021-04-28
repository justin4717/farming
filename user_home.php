<?php
include("Auth.php");
include("customer_header.php");
include("get_market.php");

?>


<div class="container ">
    <div class="row">
   
        <div class="col">
            <div class="row">
                <?php foreach( $product as $items) :    ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                       <img src="uploads/<?php echo $items["product_item_image"]; ?>"  alt="dsadas" />
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product"><?php echo $items["product_item_name"]; ?></a></h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"><?php echo $items["product_item_price"]; ?>Rs</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ; ?>
                
                
            </div>
        </div>

    </div>
</div>

<!-- Footer -->

<style type="text/css">
    /*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
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

</style>