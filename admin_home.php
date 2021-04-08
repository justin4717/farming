
<?php
    include("Auth.php");
  
    include("admin_header.php");
    include("userdatafetch.php");

?>

<section class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-10 space">
                            
                <div class="col-md-3">
                    <div class="serviceBox purple">
                        <center>
                                <b><h4 class="">Registered users</h4></b>
                                <h3 class="title"><?php echo $user_count; ?></h3>
                               
                       </center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="serviceBox lightblue">
                         <center>
                                <b><h4 class="">Post</h4></b>
                                <h3 class="title"> <?php echo $post_count; ?></h3>
                              
                       </center>
                    </div>
                </div>
                <!--<div class="col-md-3">
                    <div class="serviceBox maroon">
                         <center>
                                <b><h4 class="">Registered users</h4></b>
                                <h3 class="title"> 3250</h3>
                              
                       </center>
                    </div>
                </div>-->
            </div> 
        </div>
    </div>
</section>
<style type="text/css">
    .col-md-3{
           background-color: white;
           width: 19%;
           margin-left: 50px

    }
</style>




                    
                   
                  