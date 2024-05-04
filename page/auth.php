<?php
session_start(); // Start the session to access session data

// Check if email and password are submitted
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Database connection
    $con = new mysqli("localhost", "root", "", "register");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM registertbl WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            // Check if username is admin and password is admin123
            if ($email === "superadmin" && $password === "admin@123") {
                if ($data['role'] === "admin" && $data['is_ban'] == 1) {
                    // Display message if the admin is banned
                    $message = "Your admin account is blocked. Please contact the service provider.";
                    echo "<script>alert('$message'); window.location.href='../page/contact.html';</script>";
                    exit();
                } else {
                    // Redirect to admin dashboard
                    $_SESSION['email'] = $email; // Store email in session
                    $_SESSION['regid'] = $data['regid']; // Store regid in session
                    $message = "Login Successful";
                    echo "<script>alert('$message'); window.location.href='http://localhost/projectdev/admin/index.php';</script>";
                    exit(); // Stop further execution
                }
            } elseif ($data['email'] === $email && $data['password'] === $password) {
                if ($data['role'] === "admin" && $data['is_ban'] == 1) {
                    // Display message if the admin is banned
                    $message = "Your admin account is blocked. Please contact the service provider.";
                    echo "<script>alert('$message'); window.location.href='../page/contact.html';</script>";
                    exit();
                } elseif ($data['role'] === "admin") {
                    // Redirect to admin dashboard if the role is admin and not banned
                    $_SESSION['email'] = $email; // Store email in session
                    $_SESSION['regid'] = $data['regid']; // Store regid in session
                    $message = "Login Successful";
                    echo "<script>alert('$message'); window.location.href='http://localhost/projectdev/admin/index.php';</script>";
                    exit();
                } elseif ($data['role'] === "user" && $data['is_ban'] == 1) {
                    // Display message if the user is banned
                    $message = "Your ID is blocked. Please contact the service provider.";
                    echo "<script>alert('$message'); window.location.href='../page/contact.html';</script>";
                    exit();
                } else {
                    // Redirect to live.php if the role is user and the account is not banned
                    $_SESSION['email'] = $email; // Store email in session
                    $_SESSION['regid'] = $data['regid']; // Store regid in session
                    $message = "LOGIN Successful!";
                    echo "<script>alert('$message'); window.location.href='../page1/live.php';</script>";
                    exit();
                }
            } else {
                $message = "Invalid Username or Password";
                echo "<script>alert('$message'); window.location.href='../page/login.php';</script>";
            }
        } else {
            $message = "Invalid Username or Password";
            echo "<script>alert('$message'); window.location.href='../page/login.php';</script>";
        }
    }
} else {
    // Handle case where email or password is not submitted
    // Redirect the user back to the login page or display an error message
    header("Location: ../index.html"); // Redirect back to login page
    exit();
}
?>
