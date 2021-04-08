<?php
    include("Auth.php");
  
    include("admin_header.php");
    

?>
<script type="text/javascript">
      function pass()
      {
        var  x=document.getElementById("password").value;
       


        var l=/^([a-zA-Z0-9@*#]{6,15})+$/;
        if(x=="")
        {
          document.getElementById('m1').innerHTML="enter password";
            return false;
        }
        if(x.match(l))
        {
         document.getElementById('m1').innerHTML="";
         return true;
          
        }
        else
        {
          document.getElementById('m1').innerHTML="enter password in required format";
          return false;
        }
      }
      function cpass()
      {
        var  x=document.getElementById("password").value;
        var l=document.getElementById("cpassword").value;
        if(x=="")
        {
          document.getElementById('m2').innerHTML="enter password";
            return false;
        }
        if(x==l)
        {
         document.getElementById('m2').innerHTML="";
          return true;
        }
        else
        {
          document.getElementById('m2').innerHTML="enter same password ;"
          return false;
        }
      }
</script>



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
                      <form class="form" action="update_password.php" method="POST" id="form_submit">                          
                        <div class="body ">
                          <div class="row">
                          <div class="col-xs-6">
                            <div class="form-group">
                              
                  
                                <label for="farming"><h4>Password</h4></label>
                                <input type="text" class="form-control" name="pass" id="password" placeholder="Password" onchange="pass()" required>
                                <p style="color: red" id="m1"></p>
                         
                            </div>
                          </div>
                           <div class="col-sm-6">
                            <div class="form-group">
                                <label for="farming"><h4>Confirm Password</h4></label>
                                <input type="text" class="form-control" name="" id="cpassword" placeholder="Confirm Password" onchange="cpass()" required>
                                <p style="color: red" id="m2"></p>
                         
                            </div>
                          </div>
                          </div>
                          <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              
                            <button type="button" class="btn btn-primary " id="validate_btn" onsubmit="validate()">Change password</button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </form>
                  </div>
            </div>
        </div>
    </div>
</section>
  <script>

    function validate()
    {
      if (pass()&&cpass()) {
        return true;
      } else {
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
    .col-md-3 {
    width: 30%;
}
.container{
    background-color: gray;
}
.row{
    margin-top: 7px;
}
.form-group .form-control{
  width: 90%; 
}
</style>