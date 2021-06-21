<?php
    include("Auth.php");
    include("header.php");
    include("get_orders.php");
   

 # if (empty($_SESSION["state"])) {
  #   header("location:user_complete_registeration.php");
   # }
?>


<div class="col-xs-12 col-sm-9">
    <div class="card">
        <div class="body">
        	
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Orders

                </div>
                <div class="panel-body">

                   
                  
                    <div class="row">
                    	<div class="">
							<div class="col-md-3">
									<img src="uploads/<?php echo $item["product_item_image"]; ?>"  alt="dsadas" />
									
							</div>
							<div class="col-md-4" >
								
							</div>
							
							
						</div>
					</div>
            </div>     
        </div>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-9">
    <div class="card">
        <div class="body">
        	
            <div class="panel panel-default">
                <div class="panel-heading">
                     Orders

                </div>
                <div class="panel-body">

                    
                  
                    <div class="row">
                    	<div class="">
							<div class="col-md-3">
									<img src="uploads/<?php echo $item["product_item_image"]; ?>"  alt="dsadas" />
									
							</div>
							<div class="col-md-4" >
								
							
							</div>
							
							<div class="col-md-3 right" style="margin-top: 10%">

								
							</div>
						</div>
					</div>
            </div>     
        </div>
    </div>
</div>

<style type="text/css">
	.panel1{
		height:50%;
		overflow-y: scroll;
		padding-bottom: 20px;
	}
	img{max-width:100%;}
	*{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
.my-list {
    width: 100%;
    padding: 10px;
    border: 1px solid #f5efef;
    float: left;
    margin: 15px 0;
    border-radius: 5px;
    box-shadow: 2px 3px 0px #e4d8d8;
    position:relative;
    overflow:hidden;
}
.my-list h3{
    text-align: left;
    font-size: 14px;
    font-weight: 500;
    line-height: 21px;
    margin: 0px;
    padding: 0px;
    border-bottom: 1px solid #ccc4c4;
    margin-bottom: 5px;
    padding-bottom: 5px;
    }
	.my-list span{float:left;font-weight: bold;}
	.my-list span:last-child{float:right;}
	.my-list .offer{
    width: 100%;
    float: left;
    margin: 5px 0;
    border-top: 1px solid #ccc4c4;
    margin-top: 5px;
    padding-top: 5px;
    color: #afadad;
    }
	/*.detail {
    position: absolute;
    top: -100%;
    left: 0;
    text-align: center;
    background: #fff;height: 100%;width:100%;*/
	
}
	
.my-list:hover .detail{top:0;}
</style>