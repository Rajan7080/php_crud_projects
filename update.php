<?php
include 'connect.php';
$id=$_GET['update_id'];
$sql="Select * from `crud` where id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$mobile=$row['mobile'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
   $sql="update `crud` set  id='$id',name='$name',email='$email',mobile='$mobile', password='$password' where id = $id ";
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>




<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <title>crud_operation</title>
  </head>
  <body>
    <div class="container my-3">
  <form method="post">
  <div class="mb-3">
    <label >name</label>
    <input type="text" class="form-control" id="name"  name="name" value=<?php
    echo $name;
    ?>>
    <div class="mb-3">
    <label >email</label>
    <input type="email" class="form-control" id="email" name="email"  value=<?php
    echo $email;
    ?>>
    <div class="mb-3">
    <label >mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" value=<?php
    echo $mobile;
    ?>> 
    <div class="mb-3">
    <label >password</label>
    <input type="text" class="form-control" id="password" name="password" value=<?php
    echo $password;
    ?>>
  
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
</div>
    
  </body>
</html>
