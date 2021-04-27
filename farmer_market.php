<?php
    include("Auth.php");
    include("header.php");
    include("get_product.php");
   

 # if (empty($_SESSION["state"])) {
  #   header("location:user_complete_registeration.php");
   # }
?>



<div class="col-xs-12 col-sm-9">
    <div class="card">
        <div class="body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Product

                </div>
                <div class="panel-body">

                    <div class="row">
                        <!--<div class="col-md-3">
                            <label>Transaction Type</label>
                            <select id="trans_types" class="form-control">
                                <option value="-1">All</option>
                                <option value="0">Income</option>
                                <option value="1">Expense</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Ledger</label>
                            <select id="ledger" class="form-control">
                                <option value="-1">All</option>
                            </select>
                        </div>-->
                        <div class="col-md-3">
                            <label for="from">products</label>
                            <input class="form-control" type="text" id="dates" name="dates">
                        </div>

                        <div class="col-md-1">
                            <br>
                            <button class="btn btn-success" type="button" onclick="getTransactions()">Search</button>
                        </div>

                        <div class="col-md-2 right">
                            <br>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">New Product</button>
                        </div>
                    </div>
                   <!-- <div class="row">
                        <div class="col-md-12">
                            <table id="trans_table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Transaction No.</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Narration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>-->
                </div>
		        <div class="modal fade" id="myModal" role="dialog">
				  <div class="modal-dialog">
				    
				      <!-- Modal content-->
		            <form id="frmrecord" method="POST"  enctype="multipart/form-data">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">New Menu</h4>
				        </div>
				        <div class="modal-body">
				          <div class="row" >
				          	<div class="col-md-4">
						        
						        	<p>Item Name</p>
						          <input type="text" name="item" class="form-contol"/>
						     </div>
						     <div class="col-md-4">
						        
						        	<p>Price</p>
						          <input type="number" name="price" class="form-contol"/>
						       
						     </div>

						     <div class="col-md-4">
						       
						        	<p>Upload image</p>
						          <input type="file" name="filename" class="form-contol"/>
						        
						     </div>
						  </div>
						</div>

				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-success"  data-toggle="modal">submit</button>
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </forM>  
				  </div>
				</div>
            </div>     
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-9">
    <div class="card">
        <div class="body">
          <div class="">	
        	
        	<div class="panel panel-default panel1">
        		<?php foreach($items as $item) :    ?>
        		 <div class="panel-body panel">
                  
                    <div class="row">
                    	<div class="">
							<div class="col-md-3">
									<img src="uploads/<?php echo $item["product_item_image"]; ?>"  alt="dsadas" />
									
							</div>
							<div class="col-md-4" >
								<br><br>
								<h3><?php echo $item["product_item_name"]; ?></h3>	
								<div class="row" style="padding-left: 25%">
									<br>
								   <span><?php echo $item["product_item_price"]; ?></span>
							    
								   <span></span>
							    </div>
							
							</div>
							
							<div class="col-md-3 right" style="margin-top: 10%">

								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_product">Edit Product</button>
								<button type="button" class="btn btn-success">Delete</button>
							</div>
						</div>
					</div>
					
		        </div>
		          <?php endforeach ; ?>
		        <div class="modal fade" id="edit_product" role="dialog">
				  <div class="modal-dialog">
				    
				      <!-- Modal content-->
		            <form method="POST" action="add_menu.php" enctype="multipart/form-data">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">New Menu</h4>
				        </div>
				        <div class="modal-body">
				          <div class="row" >
				          	<div class="col-md-4">
						        
						        	<p>Item Name</p>
						          <input type="text" name="item" class="form-contol"/>
						     </div>
						     <div class="col-md-4">
						        
						        	<p>Price</p>
						          <input type="number" name="price" class="form-contol"/>
						       
						     </div>

						     <div class="col-md-4">
						       
						        	<p>Upload image</p>
						          <input type="file" name="filename" class="form-contol"/>
						        
						     </div>
						  </div>
						</div>

				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-success"  data-toggle="modal">save changes</button>
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </form>  
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
<script type="text/javascript">
jQuery(document).ready(function ($) {

    $("#frmrecord").submit(function (event) {
                event.preventDefault();
                //validation for login form
        $("#progress").html('Inserting <i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>');

            var formData = new FormData($(this)[0]);
            $.ajax({
                url: 'add_product.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                success: function (returndata) 
                {
                	if (returndata.status == 'success') {
                		alert("Successfully added!");
                		location.reload();
                	} else {
                		alert("Something error occued!");
                	}
                },
                error: function(){
                alert("error in ajax form submission");
                                    }
        });
        return false;
    });
});
 </script>