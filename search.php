<?php

include ("connection.php");

mysqli_select_db("tutorohx_rw", $conncection);

$valueToSearch = $_POST['valueToSearch'];

$sql = "SELECT * FROM user WHERE f_name=$valueToSearch ";
$result = mysqli_query($sql, $connection);

?>

<?php

if ($result)
 {
  while($row = mysqli_fetch_array($result))
 {

?>