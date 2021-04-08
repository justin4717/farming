<?php
    include("connection.php");
    include("Auth.php");
    $content=$_POST["p_content"];
    $image = "";
    $user =$_SESSION['user'];
    if ($_FILES['p_image']['name']) {
        
        $image=date('YmdHis')."-".$_FILES['p_image']['name'];
    }
    $sql="insert into post (post_content,post_image,user_id) VALUES ('$content','$image','$user')";
    echo $sql;
    if(mysqli_query($con,$sql)) {
        echo "hi";
        $targetdir = "uploads/post/";
        $targetfilepath = $targetdir.$image;
        move_uploaded_file($_FILES["p_image"]["tmp_name"],$targetfilepath);
        header("location:customer_home.php");
    } else {
        echo mysqli_error($con);
    }
    mysqli_close($con);
?>