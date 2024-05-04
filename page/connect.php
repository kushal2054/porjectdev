<?php
$fullname = $_POST['fullname'];
$country = $_POST['country'];
$contactnum = $_POST['contactnum'];
$sport = $_POST['sport'];
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'register');
if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
} else {
    // Check if the email already exists
    $check_email_query = "SELECT * FROM registertbl WHERE email=?";
    $check_stmt = $conn->prepare($check_email_query);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    if ($result->num_rows > 0) {
        $message = "Email already exists. Please choose a different email.";
        echo "<script>alert('$message'); window.location.href='../page/signup.html';</script>";
        exit(); // Exit if email already exists
    } else {
        // If email doesn't exist, proceed with insertion
        $insert_stmt = $conn->prepare("INSERT INTO registertbl (fullname, country, contactnum, sport, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $role = "user"; // Assuming default role is user
        $insert_stmt->bind_param("ssissss", $fullname, $country, $contactnum, $sport, $email, $password, $role);

        if ($insert_stmt->execute()) {
            $message = "Registration successful!";
            echo "<script>alert('$message'); window.location.href='../index.html';</script>";
            exit(); // Make sure to exit after sending the script to prevent further execution
        } else {
            die('Error: ' . $insert_stmt->error);
        }
        $insert_stmt->close();
    }
    $check_stmt->close();
    $conn->close();
}
?>
