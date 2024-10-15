<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    // Validate and sanitize input
    $id = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);
    
    if ($id === false) {
        die("Invalid ID.");
    }

    // Use a prepared statement
    $stmt = $conn->prepare("DELETE FROM `crud` WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: display.php');
        exit;
    } else {
        die("Error deleting record: " . $stmt->error);
    }
}
?>
