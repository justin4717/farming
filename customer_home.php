
<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
    include("getguideline.php");

  // if (empty($_SESSION["state"])) {
    // header("location:user_complete_registeration.php");
    //}
?>
    <style type="text/css">
        .like-ico,.unlike-ico {
            cursor: pointer;
        }
        .unlike-ico {
            color: grey!important;
        }
        .like-ico {
            color: blue!important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                   
        <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Farmers network</a></li>
                        <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Farming Instruction</a></li>
                         <li role="presentation"><a href="#financial" aria-controls="settings" role="tab" data-toggle="tab">Financial Management</a></li>
                        <!--<li role="presentation"><a href="#cost" aria-controls="settings" role="tab" data-toggle="tab">Cost managing</a></li>
                          <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Resource centers</a></li>-->
                    </ul>
                   
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <button class="btn  btn-lg waves-effect " style="position: right" data-toggle="modal" data-target="#dModal">Add Post</button>
                            <br>
                            
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
                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">

                             <?php foreach($guideline_item as $item) :    ?>
                            <div class="panel panel-default panel-post">
                                <div class="panel-heading">

                                    <div class="media">

                                       <h1> <?php echo $item["guideline_title"]; ?> Farming </h1>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="post">
                                        <div class="post-heading">
                                            <p><h3><?php echo $item["guideline_desc"]; ?></h3></p>
                                        </div>
                                        <div class="post-heading">
                                            
                                            <p><?php echo $item["guideline_content"]; ?>"</p>

                                        </div>
                                     </div>
                                 </div>
                            </div>
                                <?php endforeach ; ?>
                            
                            
                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="financial">
                         <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">            
                                       
                                         <div class="d-grid gap-2 d-md-block">
                                          <button class="btn btn-primary" type="button">New Transaction</button>

                                          <button class="btn btn-primary" type="button">Download PDF </button>
                                           <button class="btn btn-primary" type="button">Do </button>
                                        </div>
                                    </div>                  
                                </div> 
                            </div>
                           
                        </div>

                     </div>

                    <div class="modal fade" id="dModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="defaultModalLabel">Create Post</h4>
                                </div>
                            <form  method="POST" action="add_post.php" enctype="multipart/form-data"> 
                                <div class="modal-body">
                                   
                                        
                                    <textarea style="width: 562px; height: 155px;" value="Share Your Thoughts" name="p_content">
                                          
                                    </textarea>
                                    <label> Image</label>
                                    <input type="file" id="myFile"  value=" Choose Image" name="p_image">
                                </div>
                                <div class="modal-footer">
                                   
                                    <button type="submit" class="btn btn-link waves-effect" >Post</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                   
                </div>
                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                    
                </div>
                
            </div>
        
        </div>
    </div>
</div>
    
<script type="text/javascript">
    $(document).on('click', '.cm-click', function() {
        var post_id = $(this).data('post');
        $( "#cmd_"+post_id).toggle("slow");
    });
    
    function likeDislike(post_id)
    {
        $.ajax({
            type: 'POST',
            url: "likedislike.php",
            data: {post:post_id},
            dataType: "json",
            success: function(resultData) {
                if (resultData.count) {
                    $('#lc_'+post_id).html(resultData.count);
                }
            }
        });
    }

    $(document).on('click', '.unlike-ico', function() {
        var post_id = $(this).data('post');
        likeDislike(post_id);
        $(this).removeClass("unlike-ico");
        $(this).addClass("like-ico");
    });

    $(document).on('click', '.like-ico', function() {
        var post_id = $(this).data('post');
        likeDislike(post_id);
        $(this).removeClass("like-ico");
        $(this).addClass("unlike-ico");
    });
</script>
<style type="text/css">
    .bg{
           background-color: GREEN;
           width: 15%;
           margin-left: 10px;
           color: White;

    }
    .container-fluid{
        overflow: hidden;
    }
    
 

</style>