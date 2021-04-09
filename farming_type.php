<?php
    include("Auth.php");
  
    include("admin_header.php");
    include("get_farming_data.php");

?>


 <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                  <div class="header">
                      <h2>
                          Farming Details
                      <small></small>
                      </h2>
                         
                      </div>
                      <form class="form" action="add_farming.php" method="POST" id="form_submit">                          
                        <div class="body ">
                            <div class="form-group">
                              
                                  <!--<button type="button" class="btn btn-default waves-effect">view list</button>-->
                                <label for="farming"><h4>Farming Name</h4></label>
                                <input type="text" class="form-control" name="farming" id="farming" placeholder="Farming types" required>
                                <p style="color: red" id="m1"></p>
                              <!--  <button type="button" class="btn btn-success waves-effect">SUCCESS</button>
                                <button type="button" class="btn btn-info waves-effect">INFO</button>
                                <button type="button" class="btn btn-warning waves-effect">WARNING</button>
                                <button type="button" class="btn btn-danger waves-effect">DANGER</button>-->
                            </div>
                            <div class="form-group">
                              
                              <center><button type="button" class="btn btn-primary waves-effect" id="validate_btn" onsubmit="validate()">Add</button></center>
                            </div>
                        </div>
                      </form>
                  </div>
            </div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                             <h3>Guideline list</h3>
                               
                                <small></small>
                            
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                      <div class="container">
                       <h2></h2>
                      <p></p>            
                      <table class="table table-hover">
                        <thead>
                      
                          <tr>
                            <th>No:</th>
                            <th>Farming Type</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($farming_item as $item) :    ?>
                          <tr>
                            <td><?php echo $item["farming_type_id"]; ?></td>
                            <td><?php echo $item["farming_type_name"]; ?></td>
                          </tr>
                          <?php endforeach ; ?>
                        </tbody>
                      </table>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<script type="text/javascript">
  function validate(){
    var x= document.getElementById('farming').value;
    var l=/^[a-zA-Z]+$/;
        if(x=="")
        {
          document.getElementById('m1').innerHTML="enter name";
         return false;
        }

        if(x.match(l))
        {
         document.getElementById('m1').innerHTML="";
           return true;
        }
        else
        {
          document.getElementById('m1').innerHTML="enter name in required format";
         return false; 
        }
  }

   $('#validate_btn').click(function(){
    var form_valid = validate();
    if (form_valid) {
      $('#form_submit').submit();
    } else {
      alert("Invalid form");
    }
   });
</script>
<style type="text/css">
  body{
    overflow: scroll !important;
  }
</style>