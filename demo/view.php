<?php
include 'connection.php';
include 'head.php';
?>
<div class="container">
<a href="register.php" class="btn btn-primary float-end mt-2 mb-2 me-4">Add</a>
<table class="table table-hover border-2">
    <thead>
        <tr>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Age</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM student";
        $data = mysqli_query($conn, $query);
        $result = mysqli_num_rows($data);

        if ($result ) {
            while ($row = mysqli_fetch_array($data)) {
               ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                    <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>"class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="5">No records found</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</div>
<?php
include'foot.php';
?>