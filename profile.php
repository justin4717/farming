
<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
    include("getguideline.php");
    

  // if (empty($_SESSION["state"])) {
    // header("location:user_complete_registeration.php");
    //}
?>
    

    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                
         
            <div class="tab-pane active" id="home">
              <h3> My profile</h3>
                <hr>
                 <form class="form" action="update_user.php" method="post" id="registrationForm">
                   
                      
                    <div class="col-sm-12">
                 
                     <div class="tab-pane active" id="home">
                      

                       
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
    </div>
</div>
    
<style type="text/css">
  .card{
    height: 100%;
  }
</style>