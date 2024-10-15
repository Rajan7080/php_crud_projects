<?php
$conn = new mysqli('localhost','root','','crud_data');
if (!$conn){
 die(mysqli_error($conn));
}

?>