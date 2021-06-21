
<?php
    include("Auth.php");
    include("header.php");
    include("get_user.php");
    include("getguideline.php");

 # if (empty($_SESSION["state"])) {
  #   header("location:user_complete_registeration.php");
   # }
?>
<script type="text/javascript">
    var coll = document.getElementsByClassName("collapsible1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var content1 = this.nextElementSibling;
    if (content1.style.display === "block") {
      content1.style.display = "none";
    } else {
      content1.style.display = "block";
    }
  });
}
</script>

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
                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                        <div class="right">
                            <form action="" method="post" >

                                <input type="text" name="valueToSearch" placeholder="find your farming..">
                                <input type="submit" name="search" value="Search">
                            </form>
                        </div>
                            <?php foreach($guideline_item as $item) :    ?>
                            <!--  <div class="panel panel-default panel-post">
                                <div class="panel-heading">

                                    <div class="media">-->
                                    <button type="button" class="collapsible1"><?php echo $item["guideline_title"]; ?> Farming</button>
                                 
                                         <!--
                                   </div>
                                </div>
                               <div class="panel-body">
                                    <div class="post">
                                        <div class="post-heading">
                                           
                                        </div>
                                        <div class="post-heading">
                                            

                                        </div>
                                     </div>
                                 </div> -->
                                 <div class="content1">
                                    <p><h3><?php echo $item["guideline_desc"]; ?></h3></p>
                                    <p><?php echo $item["guideline_content"]; ?>"</p>

                                 <!-- </div>-->
                                 <br>
                                 
                            </div>
                            <br><br>
                                <?php endforeach ; ?>
                            
                            
                    </div>

                    <div role="tabpanel" class="tab-pane fade in" id="financial">



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Transactions

                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Transaction Type</label>
                                        <select id="trans_types" class="form-control">
                                            <option value="-1">All</option>
                                            <option value="0">Income</option>
                                            <option value="1">Expense</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Ledger</label>
                                        <select id="ledger" class="form-control">
                                            <option value="-1">All</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="from">Transaction Date</label>
                                        <input class="form-control" type="text" id="dates" name="dates">
                                    </div>
                                    <div class="col-md-1">
                                        <br>
                                        <button class="btn btn-success" type="button" onclick="getTransactions()">Search</button>
                                    </div>
                                    <div class="col-md-2">
                                        <br>
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#new_trans">New Transaction</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="trans_table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Transaction No.</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Narration</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
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

<div id="new_trans" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">News Transaction</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <label>Transaction Type</label>
                <select id="trans_type_new" class="form-control">
                    <option value="0">Income</option>
                    <option value="1">Expense</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Transaction Date</label>
                <input id="trans_date" class="form-control" type="date">
            </div>
            <div class="col-md-6">
                <label>Ledger</label>
                <select class="form-control" id="ledger_trans_new" style="width: 100%;">
                </select>
            </div>
            <div class="col-md-6">
                <label>Amount</label>
                <input id="amount" class="form-control" type="number">
            </div>
            <div class="col-md-12">
                <label>Narration</label>
                <textarea id="narration" class="form-control"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button id="trans_save" type="button" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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


    function getTransactions()
    {
        var type = $('#trans_types').val();
        var ledger = $('#ledger').val();
        var dates = $('#dates').val();
        $('#trans_table').DataTable( {
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "ajax": "get_transactions.php?type="+type+"&ledger="+ledger+"&dates="+dates,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    }

    $(document).ready(function() {
        getTransactions();
        $('input[name="dates"]').daterangepicker({
            "locale": {
                "format": "DD/MM/YYYY",
            }
        });

        $('#ledger_trans_new').select2({
            dropdownParent: $('#new_trans'),
            ajax: {
                url: 'get_ledger.php',
                dataType: 'json',
                data: function (data) {
                    return {
                        searchTerm: data.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results:response
                    };
                },
                cache: true
            }
        });

    });

    
    $('#trans_save').click(function(){
        var trans_type_new = $('#trans_type_new').val();
        var trans_date = $('#trans_date').val();
        var ledger_trans_new = $('#ledger_trans_new').val();
        var amount = $('#amount').val();
        var narration = $('#narration').val();
        if (trans_type_new=='' || trans_date=='' || ledger_trans_new=='' || amount=='') {
            alert("Please fill All Fields");
            return;
        } else {
            $.ajax({
              type: 'POST',
              url: "save_transaction.php",
              data: {trans_type:trans_type_new,trans_date:trans_date,ledger:ledger_trans_new,amount:amount,narration:narration},
              dataType: "json",
              success: function(resultData) {
                if (resultData.status=="success") {
                    alert("Transaction Saved Successfully !");
                    getTransactions();
                    $('#new_trans').modal('hide');
                }
                else
                {
                  alert("Something Error Occured !");
                }
                
              }
            });
        }
    });


var coll = document.getElementsByClassName("collapsible1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var content1 = this.nextElementSibling;
    if (content1.style.display === "block") {
      content1.style.display = "none";
    } else {
      content1.style.display = "block";
    }
  });
}

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
    

.collapsible1 {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active1, .collapsible1:hover {
  background-color: #555;
}

.content1 {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
.right{
    float: right;
    margin-right: 5px;
}
 

</style>