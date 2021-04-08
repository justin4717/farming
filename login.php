
<?php
    include("connection.php");
    session_start();
    $username=$_POST["una"];
    $password=$_POST["pa"];
    $sql="select users.user_id,user_name,password,role,name,state from users_login join users on users.user_id=users_login.user_id where user_name='$username' and password='$password'";
    $r=mysqli_query($con,$sql);
    $x=mysqli_num_rows($r);
    $resp = array("status"=> "failed", "msg" => "Invalid Username Or Password");
    if($x>0) {
        $row = mysqli_fetch_array($r);
       $_SESSION['user']=$row['user_id'];
       $_SESSION['user_name']=$row['user_name'];
       $_SESSION['name']=$row['name'];
       $_SESSION['role']=$row['role'];
       $_SESSION['state']=$row['state'];
        $resp["status"] = "success";
        if($row['role']==0)
        {
            $resp["role"] = 0;
            // header("location:admin_home.php");
        }
        else
        {
            $resp["role"] = 1;
            // header("location:customer_home.php");
        }
        
    }
    mysqli_close($con);
    echo json_encode($resp);
?>