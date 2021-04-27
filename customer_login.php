<?php
session_start();
if (isset($_SESSION['user'])) {
   if($_SESSION['role']==0)
        {
            
            header("location:admin_home.php");
        }
        elseif ($_SESSION['role']==1) {

           header("location:customer_home.php");
          # code...
        }
        else
        {
            
            header("location:user_home.php");
        }

  # code...
}
?>
<html>
<head>
<title>login</title>
 <script src="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {

   background-image:url("imgs/header.jpg");
    background-size: cover;	}

.container{
  margin-top: 4%;
  width: 100%;
}
.row{
  border: 100%;

}
.a{
  float: right;
}
.card-signin {
  width:100%;
  border-radius: 3rem;
  opacity:85%;
  margin-top: 50%;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
  color:red;
}

.form-signin {
  width: 100%;

}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}


}
</style>
<script>
      function unam()
      {
        var  x=document.getElementById("inputtext").value;
        var l=/^[a-zA-Z0-9@*#,.-_ ]+$/;
        if(x=="")
        {
          document.getElementById('m1').innerHTML="enter name";
            return true;
        }
        if(x.match(l))
        {
         document.getElementById('m1').innerHTML="";
          
        }
        else
        {
          document.getElementById('m1').innerHTML="enter name in required format";
          return true;
        }
      }
       function pass()
      {
        var  x=document.getElementById("inputPassword").value;
        var l=/^([a-zA-Z0-9@*#]{6,15})+$/;
        if(x=="")
        {
          document.getElementById('m2').innerHTML="enter password";
            return true;
        }
        if(x.match(l))
        {
         document.getElementById('m2').innerHTML="";
          
        }
        else
        {
          document.getElementById('m2').innerHTML="enter password in required format";
          return true;
        }
      }

        

     
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="user_login.php" method='POST'>
			
              <div class="form-label-group" >
                <input type="text" id="inputtext" name="una" class="form-control" onchange="unam()" placeholder="Username" required autofocus>
                <label for="inputtext">Username</label>
				<p id="m1"></p>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pa" class="form-control" onchange="pass()" placeholder="Password" required>
                <label for="inputPassword">Password</label>
				<p id="m2"></p>
              </div>

             
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button" id="loginbt">Sign in</button><br>
            <p class="a"> <a href="signup.php">Didn have an account?</a></p>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  $('#loginbt').click(function() {
            var username=$("#inputtext").val();
            var password=$("#inputPassword").val();
            if (username=="" ||  password=="") {
              alert("enter all fileds");
              return;
            }
            $.ajax({
              type: 'POST',
              url: "user_login.php",
              data: {una:username,pa:password},
              dataType: "json",
              success: function(resultData) {
                if (resultData.status=="success") {
                  if (resultData.role==0) {
                     location.href="admin_home.php";

                  }
                  else if (resultData.role==1) {
                  
                    // location.href="customer_home.php";
                  }
                  else
                  {
                    location.href="user_home.php";
                  }
                }
                else
                {
                  alert("inavlid username or password")
                }
                
              }
            });
        });
</script>
</html>
