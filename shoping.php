<?php
include("get_market.php");

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">E-Market</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
           

            <form class="form-inline my-2 my-lg-0">
                <div class="nav-item">
                    <ul class="navbar-nav ">
                  
                        <li class="nav-item">
                            <a class="nav-link" href="customer_login.php">sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_signup.php">sign up</a>
                        </li>
                    </ul>
                </div>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                
                 
            </form>
        </div>
    </div>
</nav>
<br>
<br>

<div class="container ">
    <div class="row">
   
        <div class="col">
            <div class="row">
                <?php foreach( $product as $items) :    ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                       <img src="uploads/<?php echo $items["product_item_image"]; ?>"  alt="dsadas" />
                        <div class="card-body">
                            <h4 class="card-title"><a  title="View Product"><?php echo $items["product_item_name"]; ?></a></h4>
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"><?php echo $items["product_item_price"]; ?>Rs</p>
                                </div>
                                <div class="col">
                                    <a href="customer_login.php" class="btn btn-success btn-block">Buy</a>
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
.nav-item{
    margin-right: 12px;
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

</style>