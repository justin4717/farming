

<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Profile</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

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

<body class="theme-black" ">
    <
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
     <!-- Left Sidebar -->
     <section >
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="imgs/user-lg.png" width="120" height="100" alt="User" />
                </div>
                
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="admin_home.php">
                            <i class="material-icons"></i>
                            <span>DashBord</span>
                        </a>
                    </li>
                   
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Farming Attributes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="farming_type.php" >
                                    <span>Farming Type</span>
                                </a>
                                
                            </li>
                            <!--<li>
                                <a href="javascript:void(0);" >
                                    <span>Ledger List</span>
                                </a>
                               
                            </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>User Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="userdatatable.php">Users</a>
                            </li>
                          
                           <!--  <li>
                                <a href="#">Edit User</a>
                            </li>-->
                           
                        </ul>
                    </li>
                    <li>
                        <a href="guideline.php" class="">
                            
                            <span>Guidelines</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('guideline') }}">Guidelines list</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">publish</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!--<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Farmers network</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">View Network</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Trending</a>
                            </li>
                           
                        </ul>
                    </li>-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="ml-menu">
                          <!-- <li>
                                <a href="pages/medias/image-gallery.html">edit</a>
                            </li> -->
                            <li>
                                <a href="admin_change_password.php">Change Password</a>
                            </li>
                        </ul>
                    </li>
            
                   
                </ul>
            </div>
            <!-- #Menu -
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            #Footer -->
        </aside>
    </section>


            <div class="modal fade" id="dModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

         


    <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="js/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
     <script src="js/jquery.flot.categories.js"></script>
     <script src="js/jquery.flot.time.js"></script>
     <script src="js/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/profile.js"></script>
     <script src="js/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
  <!-- Jquery DataTable Plugin Js -->
    <script src="js/plugins/jquery.dataTables.js"></script>
    <script src="js/plugins/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="js/plugins/extensions/export/dataTables.buttons.min.js"></script>
    <script src="js/plugins/extensions/export/buttons.flash.min.js"></script>
    <script src="js/plugins/extensions/export/jszip.min.js"></script>
    <script src="js/plugins/extensions/export/pdfmake.min.js"></script>
    <script src="js/plugins/extensions/export/vfs_fonts.js"></script>
    <script src="js/plugins/extensions/export/buttons.html5.min.js"></script>
    <script src="js/plugins/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
  
    <script src="js/jquery-datatable.js"></script>

    <!-- Demo Js -->
