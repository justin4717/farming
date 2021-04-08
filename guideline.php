
<?php
    include("Auth.php");
  
    include("admin_header.php");
    include("getguideline.php");
?>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Guidelines
                                <small></small>
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="button-demo">
                                <!--<button type="button" class="btn btn-default waves-effect">view list</button>-->
                                <a href="add_guideline.php"><button type="button" class="btn btn-primary waves-effect">Add</button></a>
                              <!--  <button type="button" class="btn btn-success waves-effect">SUCCESS</button>
                                <button type="button" class="btn btn-info waves-effect">INFO</button>
                                <button type="button" class="btn btn-warning waves-effect">WARNING</button>
                                <button type="button" class="btn btn-danger waves-effect">DANGER</button>-->
                            </div>
                        </div>
                    </div>
                </div>
           
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                             <h3>Guideline list</h3>
                               
                                <small></small>
                            
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
                      <div class="container">
						   <h2></h2>
						  <p></p>            
						  <table class="table table-hover">
						    <thead>
						  
						      <tr>
						        <th>No:</th>
						        <th>Title</th>
						        <th>Desciption</th>
						      </tr>
						    </thead>
						    <tbody>
						    <?php foreach($guideline_item as $item) :    ?>
						      <tr>
						        <td><?php echo $item["g_id"]; ?></td>
						        <td><?php echo $item["guideline_title"]; ?></td>
						        <td><?php echo $item["guideline_desc"]; ?></td>
						      </tr>
						      <?php endforeach ; ?>
						    </tbody>
						  </table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>