<?php
include "connection.php";

if(isset($_POST['una'])){
   $username = $_POST['una'];

   $query = "select count(*) as cntUser from users_login where user_name='".$username."'";

   $result = mysqli_query($con,$query);
   $response = array('status'=>'success');
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response['status']='failed';
      }
   
   }

   echo json_encode($response);
   die;
}
?>