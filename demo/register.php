<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container py-5 my-5">
        <h4 class="text-center mt-2 mb-4 ">Register Form</h4>
    <form method="post" >
        <input type="text" name="firstname" placeholder="Enter your Name" class="form-control"><br>

        <input type="text" name="lastname" placeholder="Enter your LastName" class="form-control"><br>

        <input type="text" name="age" placeholder="Enter your Age " class="form-control"><br>

        <input type="submit" name="save_btn" value="Submit" class="btn btn-primary me-3">
        <a href="view.php" class="btn btn-success float-end">
           List
        </a>
     </form>
     </div>
<?php
if(isset($_POST['save_btn'])){
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $age=$_POST['age'];
    $sql="INSERT INTO  `student`( firstname,lastname,age) VALUES  ('$first_name','$last_name','$age')";
    $result=mysqli_query($conn, $sql);
    if($result){
       ?>
       <?php 
       header('location:view.php');
       ?>
       
       <?php
    }else{
        ?>
        <script type="text/javascript">
        alert ("pls try again");
        </script>
        <?php
    }
}

?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>