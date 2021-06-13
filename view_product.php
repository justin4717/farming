<?php
include("Auth.php");
include("customer_header.php");
include("view_buying_product.php");
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-9">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="pull-right"> </span>
                    <h5>Purchase Product</h5>
                </div>
                <div class="ibox-content">
                    
                        <div class="container1">
                        	<?php foreach( $buy_product as $items) :    ?>
                            <div class="row">
                                  <div class="col-md-3">
                                    <div class="cart-product-imitation">
                                      <img height="150%" width="150%" src="uploads/<?php echo $items["product_item_image"]; ?>"  alt="dsadas"  />
                                    </div>
                                  </div>
                                <div class="col-md-3">
                                    <h3>
                                    <a href="#" class="text-navy">
                                       <?php echo $items["product_item_name"]; ?>
                                    </a>
                                    </h3>
                                    <!--<p class="small">
                                        <?php echo $items["product_item_price"]; ?>
                                    </p>
                                    <dl class="small m-b-none">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                    </dl>

                                    <div class="m-t-sm">
                                        <a href="#" class="text-muted"><i class="fa fa-gift"></i> Add gift package</a>
                                        |
                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i> Remove item</a>
                                    </div>-->
                                </div>
                                <div class="col-md-3 distance">
                                  <div class="row">
                                  1Kg.  <?php echo $items["product_item_price"]; ?> RS
                                    </div>

                                <br>
                                <br>
                                    <div class="row" style="">
                                       Quantity:  <input style="width: 60px" type="text" class="form-control" placeholder="1">
                                    </div>
                                  </div>
                                
                               <div class="col-md-3 " >
                                    <h4>
                                         <?php echo $items["product_item_price"]; ?>RS
                                    </h4>
                               </div>
                            
                               <?php endforeach ; ?>
                       </div>
                   

                 </div>
                
                      <div class="ibox-content">
                          <button class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                          <a href="user_home.php "><button class="btn btn-white" ><i class="fa fa-arrow-left"></i> Continue shopping</button>

                      </div>
          

        </div>
      </div>
    </div>
        <div class="col-md-3">
           
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Support</h5>
                </div>
                <div class="ibox-content text-center">
                    <h3><i class="fa fa-phone"></i> </h3>
                    <span class="small">
                        
                    </span>
                </div>
            </div>

            
            </div>
        </div>
    </div>
</div>
</div>
<style type="text/css">
  body{margin-top:20px;
    background:#eee;
    overflow: hidden;
}
h3 {
    font-size: 16px;
}
.text-navy {
    color: #1ab394;
}
.cart-product-imitation {
  text-align: center;
  padding-top: 30px;
  height: 80px;
  width: 80px;
  background-color: #f8f8f9;
}
.product-imitation.xl {
  padding: 120px 0;
}
.product-desc {
  padding: 20px;
  position: relative;
}
.ecommerce .tag-list {
  padding: 0;
}
.ecommerce .fa-star {
  color: #d1dade;
}
.ecommerce .fa-star.active {
  color: #f8ac59;
}
.ecommerce .note-editor {
  border: 1px solid #e7eaec;
}

.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}
.container1 {
    max-width: 1140px;
    margin-bottom: 5rem;
}
.distance{
  padding-bottom: 2px;
}

</style>