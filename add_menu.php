<?php
    include("connection.php");
    $item=$_POST["item"];
    $price=$_POST['price'];
    $filename = "";
    if ($_FILES['filename']['name']) {
        $filename=date('YmdHis')."-".$_FILES['filename']['name'];
    }
    $sql="insert into menu_items (title,item_price,image) VALUES ('$item','$price','$filename')";
    if(mysqli_query($con,$sql)) {
        $targetdir = "uploads/";
        $targetfilepath = $targetdir.$filename;
        move_uploaded_file($_FILES["filename"]["tmp_name"],$targetfilepath);
        header("location:menu_item.php");
    } else {
        echo mysqli_error($con);
    }
    mysqli_close($con);
?>