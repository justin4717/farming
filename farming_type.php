<?php
    include("Auth.php");
  
    include("admin_header.php");
    

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