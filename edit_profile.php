<?php
include('Auth.php');
include('header.php');
include("get_user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 profile with messages and edit - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
     .profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}
   </style>

</head>



 <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                   
                 <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">my Profile</a></li>
                        <li role="presentation"><a href="#profile_edit" aria-controls="settings" role="tab" data-toggle="tab">Edit </a></li>
                         
                        <!--<li role="presentation"><a href="#cost" aria-controls="settings" role="tab" data-toggle="tab">Cost managing</a></li>
                          <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Resource centers</a></li>-->
                    </ul>
                   
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile">
                            <?php foreach( $user_item as $items) :    ?>
                           
                             <div class="page-content page-container" id="page-content">
                                <div class="padding">
                                    <div class="row container d-flex justify-content-center">
                                        <div class="col-xl-6 col-md-12">
                                            <div class="card user-card-full">
                                                <div class="row m-l-0 m-r-0">
                                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                                        <div class="card-block text-center text-white">
                                                            <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                            <h6 class="f-w-600"><?php echo $items["name"]; ?></h6>
                                                            <p>Farmer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="card-block">
                                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">Email</p>
                                                                    <h6 class="text-muted f-w-400"><?php echo $items["email"]; ?></h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">Phone</p>
                                                                    <h6 class="text-muted f-w-400"> <?php echo $items["phone"]; ?></h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">Address</p>
                                                                    <h6 class="text-muted f-w-400"> <?php echo $items["state"]; ?></h6>
                                                                    <h6 class="text-muted f-w-400"><?php echo $items["district"]; ?> </h6>
                                                                     <h6 class="text-muted f-w-400"><?php echo $items["area"]; ?> </h6>
                                                                </div>
                                                                 <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">pin</p>
                                                                    <h6 class="text-muted f-w-400"> <?php echo $items["pin"]; ?></h6>
                                                                </div>
                                                            </div>
                                                            <
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach ; ?>
                        </div>
                  

                   
                 
                
                <div role="tabpanel" class="tab-pane fade in" id="profile_edit">
                   <form>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $items["name"]; ?>">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value=" <?php echo $items["email"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="<?php echo $items["phone"]; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="state">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" value="" placeholder="District">
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" value="" placeholder="area">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">pin</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $items["pin"]; ?>">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
               
                
            </div>
        
        </div>
    </div>
</div>


</div>
</div>
<style type="text/css">
    body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
</style>