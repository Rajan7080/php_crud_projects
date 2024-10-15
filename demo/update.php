<?php
include 'connection.php';
 $id=$_GET['id'];
$select=" SELECT * FROM  student WHERE  id ='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array(($data));
?>
  <div class="container ">
    <form method="post" >
        <input type="text" name="firstname" placeholder="enter your first name" value="<?php echo $row['firstname'];?>"><br><br>

        <input type="text" name="lastname" placeholder="enter your last name"  value="<?php echo $row['lastname'];?>"><br><br>

        <input type="text" name="age" placeholder="enter your age" value="<?php echo $row['age']?>"><br><br>

        <input type="submit" name="update_btn" value="update">
        <a href="view.php" class="btn btn-primary">Back</a>
     </form>
     </div>
     <?php
     if(isset($_POST['update_btn'])){
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $age=$_POST['age'];
    $sql=" UPDATE  `student`SET firstname='$first_name', lastname='$last_name', age='$age' WHERE id='$id'";
    $result=mysqli_query($conn, $sql);
    if($result){
       ?>
       <script type="text/javascript">
       alert ("data update successfully");
       </script>

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

    