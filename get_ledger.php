
<?php

    session_start();
    if (!$_SESSION['user']) {
        echo json_encode(array());
        exit;
    } else {
        if(!isset($_GET['searchTerm'])){ 
            $search = '';
        }else{
            $search = $_GET['searchTerm'];
        }
        include("connection.php");
        $sql = "SELECT id, ledger_name FROM ledger_master 
        WHERE ledger_name LIKE '%".$search."%'
        LIMIT 50";
        // echo $sql;
        $result=mysqli_query($con, $sql);
        $json = [];
        while($row = mysqli_fetch_assoc($result)){
            $json[] = ['id'=>$row['id'], 'text'=>$row['ledger_name']];
        }

        echo json_encode($json);
    }

?>