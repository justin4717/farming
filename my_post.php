<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
    include("getguideline.php");
    

  // if (empty($_SESSION["state"])) {
    // header("location:user_complete_registeration.php");
    //}
?>

<div class="content">
    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body1">
             <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            
                            <br><br>
                            
                             <?php foreach($post_item as $item) :    ?>
                            <div class="panel panel-default panel-post">
                                <div class="panel-heading">

                                    <div class="media">

                                        <div class="media-left">
                                            <a href="#">
                                                <img src="../../images/user-lg.jpg" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#"><?php echo $item["name"]; ?></a>
                                            </h4>
                                            <?php echo $item["created_at"]; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="post">
                                        <div class="post-heading">
                                            <p><?php echo $item["post_content"]; ?>"</p>
                                        </div>
                                        <div class="post-content">
                                            
                                            
                                            <img style="height: 70%; width: 50%" src="uploads/post/<?php echo $item["post_image"]; ?>" class="img-responsive" />
                                        </div>
                                     </div>
                                 </div>
                                 <div class="panel-footer">
                                                <ul>
                                                    <li>
                                                        <a>
                                                            <i class="material-icons <?php if ($item["user_liked"]>0) { echo "like-ico"; } else { echo "unlike-ico"; } ?>"
                                                            data-post="<?php echo $item["post_id"]; ?>">thumb_up</i>
                                                            <span id="lc_<?php echo $item["post_id"]; ?>"><?php echo $item["total_likes"]; ?></span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="cm-click" data-post="<?php echo $item["post_id"]; ?>">
                                                        <a href="" aria-controls="settings" role="tab" data-toggle="tab">
                                                            <i class="material-icons">comment</i>
                                                            <span>Comments</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="click" data-post="">
                                                        
                                                           
                                                    </li>
                                                </ul>

                                                <div class="form-group" id="cmd_<?php echo $item["post_id"]; ?>" style="display: none;">
                                                    <div class="">
                                                        <input type="text" class="form-control" placeholder="Type a comment" />
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                                <?php endforeach ; ?>
                            
                        </div>
              
              <hr>
              
             </div><!--/tab-pane-->
     
        </div>
    </div>
</div>
</div>
</div>

<style type="text/css">
  .body1{
    
    height:100%;
    overflow-y: scroll;

  }
  .card{
    padding-bottom: 100px;
  }
</style>