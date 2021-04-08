
<?php
    include("connection.php");
    session_start();
    $post_id=$_POST["post"];
    $sql="select *
            from tbl_like where user_id='".$_SESSION['user']."' and post_id='$post_id' ";
    $r=mysqli_query($con,$sql);
    $x=mysqli_num_rows($r);
    // echo $x; exit;
    if($x>0) {
        $row = mysqli_fetch_array($r);
        $like_status=1;
        if ($row['is_active'] == 1) {
            $like_status = 0;
        }
        $sql_update="update tbl_like set is_active='$like_status' where user_id='".$_SESSION['user']."' and post_id='$post_id' ";
        mysqli_query($con,$sql_update);        
    } else {
        $sql_insert="insert into tbl_like (post_id,user_id,is_active) VALUES (".$post_id.",".$_SESSION['user'].",1)";
        mysqli_query($con,$sql_insert);
    }
    $sql_likes="select count(like_id) AS like_count
            from tbl_like where post_id='$post_id' AND is_active=1";
    $r_l=mysqli_query($con,$sql_likes);
    $c_row = mysqli_fetch_array($r_l);

    $resp = array("count"=> $c_row['like_count']);
    mysqli_close($con);
    echo json_encode($resp);
?>