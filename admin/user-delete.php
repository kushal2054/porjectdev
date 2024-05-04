<?php
// Check if regid is set
if (isset($_GET['regid'])) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'register');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepare and execute the delete query
        $delete_query = "DELETE FROM registertbl WHERE regid=?";
        $delete_stmt = $conn->prepare($delete_query);
        $delete_stmt->bind_param("i", $_GET['regid']);
        if ($delete_stmt->execute()) {
            // Redirect back to user list after successful deletion
            header("Location: user.php");
            exit();
        } else {
            echo "Error deleting record: " . $delete_stmt->error;
        }
        $delete_stmt->close();
        $conn->close();
    }
} else {
    // Redirect to user list with an error message if regid is not set
    header("Location: user.php?error=RegidNotSet");
    exit();
}
?>
