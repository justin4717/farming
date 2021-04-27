<?php
include("get_user.php");


?>


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  
  <!------ Include the above in your HEAD tag ---------->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-12 pull-right"><h6 style="color: red; text-align: center;">******************** Please fill out the full details **********************</h6></div>
      <h1>User name</h1>

    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              <br>
<form class="form" action="update_user.php" method="post" id="registrationForm">
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" >
       <br><br>
         <input type="file" class="text-center center-block file-upload" name="user_image" id="user_image" required>
      </div></hr><br>

               
         
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            
        <div class="col-sm-12">
         
            <div class="tab-pane active" id="home">
                <hr>

                 
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                              <label for="email"><h4>Gender</h4></label>
                               <select style="height:35" class="form-control" id="gender" name="gender" required>
                                   <option value="">Select Gender</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                              <label for="email"><h4>State</h4></label>
                           
                                <select style="height:35" class="form-control" id="state" name="state" required>
                                   <option value="">Select State</option>
                                <?php foreach($state_item as $item) :    ?>
                                 
                                <option value="<?php echo $item["state_id"]; ?>"><?php echo $item["state_name"]; ?></option>
                                 <?php endforeach ; ?>
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                              <label for="password"><h4>District</h4></label>
                             <select style="height:35" class="form-control" id="district" name="district" required>
                               <option value="">Select District</option>.
                                <?php foreach($state_item as $item) :    ?>
                                 
                               
                                 <?php endforeach ; ?>
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                            <label for="password2"><h4>Place</h4></label>
                              <input type="text" class="form-control" name="place" id="place" placeholder="place" title="enter your place." required>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                            <label for="password2"><h4>Pin</h4></label>
                              <input type="text" class="form-control" name="pin" id="place" placeholder="pin" title="enter your pin" required>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                          
                            <label for="password2"><h4>Type Of Framing</h4></label>
                               <select style="height:35" class="form-control" id="farming_type" name="farming" multiple>
                                   
                                   <?php foreach($farming_item as $item) :    ?>

                                      <option value="<?php echo $item["farming_type_id"]; ?>"><?php echo $item["farming_type_name"]; ?></option>

                                 <?php endforeach ; ?>
                                   
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                            <div class="form-group">
                           
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	
                            </div>
                      </div>

                    </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
           </div>

        </div><!--/col-9-->
    </div><!--/row-->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#farming_type").select2();
      });

      $('#state').change(function() {
        var state_id = $(this).val();
        $.ajax({
          type: 'POST',
          url: "get_district.php",
          data: {state:state_id},
          dataType: "json",
          success: function(resultData) {
            var dsl = '<option value="">Select District</option>';
            if (resultData!='') {
              $.each(resultData, function(i,v){
                dsl += '<option value="'+v.district_id+'">'+v.district_name+'</option>';
              });
            }
            $('#district').html(dsl);
          }
        });
      });
    </script>