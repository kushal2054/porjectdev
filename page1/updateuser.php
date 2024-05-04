<?php
session_start(); // Start the session to access session data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $contactnum = isset($_POST['contactnum']) ? $_POST['contactnum'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    // Check if email and regid are stored in the session
    if (isset($_SESSION['email']) && isset($_SESSION['regid'])) {
        $email = $_SESSION['email'];
        $regid = $_SESSION['regid'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'register');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        } else {
            // Construct the SQL query based on the filled fields
            $query = "UPDATE registertbl SET ";
            $params = array();

            // Only include fields that are not empty in the query
            if (!empty($fullname)) {
                $query .= "fullname = ?, ";
                $params[] = $fullname;
            }
            if (!empty($contactnum)) {
                $query .= "contactnum = ?, ";
                $params[] = $contactnum;
            }
            if (!empty($password)) {
                $query .= "password = ?, ";
                $params[] = $password;
            }

            // Retrieve image data from uploaded file if available
            if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
                $image = $_FILES['image']['tmp_name']; // Temporary file path
                
                // Convert image to binary data
                $imageData = file_get_contents($image); // No need for addslashes()
                
                $query .= "image = ?, "; // Include image in the query
                $params[] = $imageData;
            }

            // Remove the trailing comma and space
            $query = rtrim($query, ", ");

            // Add WHERE clause
            $query .= " WHERE email = ? AND regid = ?";
            $params[] = $email;
            $params[] = $regid;

            // Using prepared statement to prevent SQL injection
            $stmt = $conn->prepare($query);

            // Bind parameters
            $types = str_repeat('s', count($params)); // Assuming all parameters are strings
            $stmt->bind_param($types, ...$params);

            // Execute the statement
            if ($stmt->execute()) {
                $message = "User details updated successfully!";
                echo "<script>alert('$message'); window.location.href='../page1/normaluser.php';</script>";
            } else {
                $message = "Failed to update user details";
                echo "<script>alert('$message'); window.location.href='../page1/normaluser.php';</script>";
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
        }
    } else {
        // Handle case where session data is not set
        $message = "User session data not found. Please log in again.";
        echo "<script>alert('$message'); window.location.href='../page/login.php';</script>";
    }
} else {
    // Redirect if accessed directly
    header("Location: ../page/signup.html");
    exit();
}

?>
