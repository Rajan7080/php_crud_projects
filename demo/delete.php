<?php
include('connection.php');

// Use prepared statements to prevent SQL injection
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
$stmt->bind_param("i", $id); // Assuming 'id' is an integer

if ($stmt->execute()) {
    // Redirect to view.php
    header('Location: view.php');
    exit(); // Always exit after a redirect
} else {
    echo 'Not deleted';
}

$stmt->close();
$conn->close();
?>
