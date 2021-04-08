<?php
    include("Auth.php");
   
    include("admin_header.php");
    include("userdatafetch.php");

?>
<section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              User List
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                
                                    <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1">
                                        </label>
                                    </div>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                          <!--  <th>Action</th>
                                            <th>user details</th>-->
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <?php foreach($items as $item) :    ?>
                                        <tr>
                                            <td><?php echo $item["name"]; ?></td>
                                            <td><?php echo $item["email"]; ?></td>
                                             <td><?php echo $item["phone"]; ?></td>
                                            <td>
                                                <?php 
                                                if ($item["is_active"]==1)
                                                {
                                                    echo "Active";
                                                } 
                                                else
                                                {
                                                    echo "not active";
                                                }
                                                ?>
                                            </td>
                                            <td></td>
                                            <!--<td><button class="btn btn-primary">update</button></td>-->

                                        </tr>
                                        <?php endforeach ; ?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- #END# Exportable Table -->


      