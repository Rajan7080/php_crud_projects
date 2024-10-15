<?php
$conn= new mysqli('localhost','root','','crud_data');
if($conn){
 echo '';
}else{
    echo'not connected';
}
?>