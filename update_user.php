<?php
    include("connection.php");
    include("Auth.php");

    $gender=$_POST["gender"];
    $state=$_POST["state"];
    $district=$_POST["district"];
    $pin=$_POST["pin"];
    $place=$_POST["place"];
    $farming=$_POST["farming"];
    $image = "";
    if ($_FILES['user_image']['name']) {
        
        $image=date('YmdHis')."-".$_FILES['user_image']['name'];
    }
    $sql=" UPDATE users
         SET gender='$gender',state='$state',district='$district',pin='$pin',area='$place',user_image='$image' where user_id='".$_SESSION['user']."'";

    if(mysqli_query($con,$sql)) {
      
        $targetdir = "uploads/user/";
        $targetfilepath = $targetdir.$image;
        move_uploaded_file($_FILES["user_image"]["tmp_name"],$targetfilepath);
        header("location:customer_home.php");
    } else {
        echo mysqli_error($con);
    }
    mysqli_close($con);
?>