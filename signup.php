
<html>
<head>
<title>login</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
.container1{
border-radius:50px;
}
body {

   background-image:url("imgs/header.jpg");
    background-size: cover;
    background-attachment:fixed;	
}

.card-signin {

  border:0;
  border-radius: 5rem;
  opacity:90%;
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
<script type="text/javascript">
    function nam()
      {
        var  x=document.getElementById("inputname").value;
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
        function eml()
      {
        var  x=document.getElementById("inputEmail").value;
        var l=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        if(x=="")
        {
          document.getElementById('m2').innerHTML="enter email";
            return false;
        }
        if(x.match(l))
        {
         document.getElementById('m2').innerHTML="";

             return true;
        }
        else
        {
          document.getElementById('m2').innerHTML="enter email in required format";
          return false;
        }
      }
    function unam()
      {
        var  x=document.getElementById("inputtext").value;
        var l=/^[a-zA-Z0-9@*#,.-_ ]+$/;
        if(x=="")
        {
          document.getElementById('m3').innerHTML="enter username";
            return false;
        }
        if(x.match(l))
        {
         document.getElementById('m3').innerHTML="";
         $.ajax({
              type: 'POST',
              url: "check_username.php",
              data: {una:x},
              dataType: "json",
              success: function(response){
                if (response.status=='success') {
                  alert("dgd");
                  return true;
                } else {

                  return false;
                }
              },
          });
        }
        else
        {
          document.getElementById('m3').innerHTML="enter username in required format";

          return false;
        }
      }
       function pass()
      {
        var  x=document.getElementById("inputPassword").value;
        var l=/^([a-zA-Z0-9@*#]{6,15})+$/;
        if(x=="")
        {
          document.getElementById('m4').innerHTML="enter password";
           return false;
        }
        if(x.match(l))
        {
         document.getElementById('m4').innerHTML="";
            return true;
        }
        else
        {
          document.getElementById('m4').innerHTML="enter password in required format";
          return false;
        }
      }
       function cpass()
      {
        var  x=document.getElementById("inputcPassword").value;
        var l=document.getElementById("inputPassword").value;
        if(x=="")
        {
          document.getElementById('m5').innerHTML="enter password";
            return false;
        }
        if(x==l)
        {
         document.getElementById('m5').innerHTML="";
            return true;
        }
        else
        {
          document.getElementById('m5').innerHTML="enter same password ;"
          return false;
        }
      }
       function pho()
      {
        var  x=document.getElementById("inputphone").value;
        var l=/^[789]\d{9,9}$/;
        if(x=="")
        {
          document.getElementById('m7').innerHTML="enter phone no";
           return false;
        } 
        if(x.match(l))
         {
          document.getElementById('m7').innerHTML="";
           return true;
         }
         else
         {
           document.getElementById('m7').innerHTML="enter valid number";
           return false;
      
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
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="POST" action="insert.php" id="form_sign_up">
			  
			  
			  <div class="form-label-group">
                <input type="text" id="inputname" class="form-control" name="na" placeholder="Name" onchange="nam()" required autofocus>
                <label for="inputname">Name</label>
				<p id="m1"></p>
              </div>
			
			  <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="em" onchange="eml()" placeholder="Email" required autofocus>
                <label for="inputEmail">Email</label>
				<p id="m2"></p>
              </div>
			
              <div class="form-label-group">
                <input type="text" id="inputtext" class="form-control" name="una" onchange="unam()" placeholder="Username" required autofocus>
                <label for="inputtext">Username</label>
				<p id="m3"></p>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="pa" onchange="pass()" placeholder="Password" required autofocus>
                <label for="inputPassword">Password</label>
				        <p id="m4"></p>
              </div>
			  
			  <div class="form-label-group">
                <input type="password" id="inputcPassword" class="form-control" onchange="cpass()" placeholder="Confirm Password" required>
                <label for="inputcPassword">Confirm Password</label>
				<p id="m5"></p>
              </div>
			  
			   
			  <div class="form-label-group">
                <input type="number" id="inputphone" class="form-control" name="ph" onchange="pho()" placeholder="Password" required>
                <label for="inputphone">Phone</label>
			        	<p id="m7"></p>
        </div>
       
			  
			 
			 

             
              <center><button class="btn btn-lg btn-primary  text-uppercase" id="sign_up_btn" type="button" >Sign up</button>
                 <p class="a"> <a href="log.php">Already have an  account?</a></p></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>

    function validate()
    {
      if (nam()&&eml()&&unam()&&pass()&&cpass()&&pho()) {
        return true;
      } else {
        return false;
      }
    }

	 $('#sign_up_btn').click(function(){
    var form_valid = validate();
    if (form_valid) {
      $('#form_sign_up').submit();
    } else {
      alert("Invalid form");
    }
   });
  </script>
</body>
</html>
