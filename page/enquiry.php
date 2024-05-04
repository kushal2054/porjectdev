<?php

// Database connection
$conn = new mysqli("localhost", "root", "", "register");
if ($conn->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
} else {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Prepared statement to prevent SQL injection
        $sql = "INSERT INTO register.enqtbl (fullname, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $fullname, $email, $message);

        if ($stmt->execute()) {
            $message = "Message Sent Successfully";
            echo "<script>alert('$message'); window.location.href='../index.html';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
    // Close the connection
    $conn->close();
}
?>
