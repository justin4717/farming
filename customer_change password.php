
<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
    include("getguideline.php");
    include("user_update_password.php");

  // if (empty($_SESSION["state"])) {
    // header("location:user_complete_registeration.php");
    //}
?>
    <style type="text/css">
        .like-ico,.unlike-ico {
            cursor: pointer;
        }
        .unlike-ico {
            color: grey!important;
        }
        .like-ico {
            color: blue!important;
        }
        .form-group .form-control{
            width: 80% !important;
        }
    </style>
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


    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                
         
            <div class="tab-pane active" id="home">
                <hr>
                 <form class="form" action="user_update_password.php" method="POST" id="form_submit">   
                 
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                            <label for="password2"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="pass" id="password" placeholder="new password" title="enter your place." onchange="pass()" required>
                               <p style="color: red" id="m1"></p>
                             
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                          
                            <label for="password2"><h4>verify password</h4></label>
                              <input type="password" class="form-control" name="pin" id="cpassword" placeholder="verify password" title="enter password "  onchange="cpass()" required>
                               <p style="color: red" id="m2"></p>
                          </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                            <div class="form-group">
                           
                                <br>
                                <button class="btn btn-lg btn-success" id="validate_btn" type="button" onsubmit="validate()"></i> Save</button>
                                
                            </div>
                      </div>

                    </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->
     
        </div>
    </div>
</div>
    
<script type="text/javascript">
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