<?php
// Check if regid is set
if (isset($_GET['regid'])) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'register');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Check the current value of is_ban
        $check_query = "SELECT is_ban FROM registertbl WHERE regid=?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("i", $_GET['regid']);
        $check_stmt->execute();
        $check_stmt->bind_result($is_ban);
        $check_stmt->fetch();
        $check_stmt->close();
        
        // Update the is_ban field
        $new_is_ban = $is_ban == 0 ? 1 : 0; // If it's 0, change to 1; if it's 1, change to 0
        $update_query = "UPDATE registertbl SET is_ban=? WHERE regid=?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ii", $new_is_ban, $_GET['regid']);
        
        if ($update_stmt->execute()) {
            // Redirect back to user list after successful update
            header("Location: user.php");
            exit();
        } else {
            echo "Error updating record: " . $update_stmt->error;
        }
        $update_stmt->close();
        $conn->close();
    }
} else {
    // Redirect to user list with an error message if regid is not set
    header("Location: user.php?error=RegidNotSet");
    exit();
}
?>
