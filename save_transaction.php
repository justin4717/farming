<?php
    include("connection.php");
    include("Auth.php");
    $type = $_POST["trans_type"];
    $date = date('Y-m-d', strtotime($_POST["trans_date"]));
    $ledger = $_POST["ledger"];
    $amount = $_POST["amount"];
    $narration = $_POST["narration"];
    
    $user =$_SESSION['user'];
    $created = date("Y-m-d H:i:s");

    $sql="insert into transactions (trans_amount,trans_date,trans_type,ledger,narration,user_id,created_at) VALUES ($amount,'$date',$type,$ledger,'$narration',$user,$created)";
    $output = array("status" => "failed");
    if(mysqli_query($con,$sql)) {
        $output['status'] = 'success';
    } else {
        // echo mysqli_error($con);
    }
    mysqli_close($con);
    echo json_encode($output);
?>