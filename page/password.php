<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'register');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Using prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM registertbl WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $update_stmt = $conn->prepare("UPDATE registertbl SET password = ? WHERE email = ?");
            $update_stmt->bind_param("ss", $password, $email);
            
            if ($update_stmt->execute()) {
                $message = "Password updated successfully!";
                echo "<script>alert('$message'); window.location.href='../page/signup.html';</script>";
            } else {
                $message = "Failed to update password";
                echo "<script>alert('$message'); window.location.href='../page/signup.html';</script>";
            }
        } else {
            $message = "Username does not exist. Please create an account.";
            echo "<script>alert('$message'); window.location.href='../page/signup.html';</script>";
        }
        
        // Close statements and connection
        $stmt->close();
        $update_stmt->close();
        $conn->close();
    }
} else {
    // Redirect if accessed directly
    header("Location: ../page/signup.html");
    exit();
}
?>
