<?php
    include("connection.php");
    include("Auth.php");
    $item=$_POST["item"];
    $price=$_POST['price'];
    $user=$_SESSION['user'];
    $filename = "";
    if ($_FILES['filename']['name']) {
        $filename=date('YmdHis')."-".$_FILES['filename']['name'];
    }
    $sql="insert into product_item (product_item_name,product_item_price,product_item_image,user_id) VALUES ('$item','$price','$filename','$user')";
    if(mysqli_query($con,$sql)) {
        $targetdir = "uploads/";
        $targetfilepath = $targetdir.$filename;
        move_uploaded_file($_FILES["filename"]["tmp_name"],$targetfilepath);
        echo json_encode(['status' => 'success']);
    } else {
        echo mysqli_error($con);
        echo json_encode(['status' => 'error']);
    }
    mysqli_close($con);
?>