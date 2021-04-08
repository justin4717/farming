<html>
<head>
  <title>home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    
    <link rel="icon" href="imgs/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
   <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="css/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet" />

     <link href="css/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style1.css" rel="stylesheet"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/all-themes.css"  rel="stylesheet" />
    <link href="css/materialize.css"  rel="stylesheet" />

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Farming Assistant
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        
      </ul>
    </div>
  </nav>
  <div class="col-xs-12 col-sm-3">
    <div class="card profile-card">
        <div class="profile-header">&nbsp;</div>
        <div class="profile-body">
            <div class="image-area">
                <img src="imgs/user-lg.jpg" alt="AdminBSB - Profile Image" />
            </div>
            <div class="content-area">
                <h3><?php echo $_SESSION["name"]; ?></h3>
            </div>
        </div>
        <div class="profile-footer">
            
                
            <button class="btn  btn-lg waves-effect btn-block"><a href="customer_home.php">Home</a></button>  
          <!--  <button class="btn  btn-lg waves-effect btn-block"><a href="profile.php">My profile </a></button>
            <button class="btn  btn-lg waves-effect btn-block">Posts</button>
            <button class="btn  btn-lg waves-effect btn-block">Friends</button>
            <button class="btn  btn-lg waves-effect btn-block">Chat</button>
            <button class="btn  btn-lg waves-effect btn-block">Images</button>
            <button class="btn  btn-lg waves-effect btn-block">Notifications</button>-->
            <button class="btn  btn-lg waves-effect btn-block"><a href="customer_change password.php">Change Password</a></button>
            <br>
        </div>
        
        
    </div>   
</div>  

</body>