     
<?php
    include("Auth.php");
    
    include("admin_header.php");
?>
 <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add Guideline
                               
                            </h2>
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
                        <div class="body">
                           <form id="add_guideline" method="POST" action="create_guideline.php">
                           	 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="title" placeholder="Name of Farming  " required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="small_description" placeholder="small description about the content" required="">
                                        </div>
                                    </div>
            	                     <div class="form-group">
            	                    	<div class="form-line">
            	                            <textarea rows="4" class="form-control no-resize" name="content" placeholder="content..." required="
                                            ';lsfghtngfds"></textarea>
            	                        </div>
            	                    </div>
            	                     <div class="button-demo">
                                          
                                          <button class="btn  bg-pink waves-effect" type="submit">Add</button>
                                           <button class="btn  bg-pink waves-effect" type="button"><a href="guideline.php"><font color="white">cancel</font></a></button>
                                         
                                        </div>
                                </div>
                            </div>  
                            </form>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>