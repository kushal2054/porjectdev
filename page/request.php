<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate form data
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'register');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        } else {
            // Check if email exists in registertbl
            $email_check_query_registertbl = "SELECT * FROM registertbl WHERE email = '$email'";
            $result_registertbl = $conn->query($email_check_query_registertbl);
            
            // Check if email exists in requesttbl
            $email_check_query_requesttbl = "SELECT * FROM requesttbl WHERE email = '$email'";
            $result_requesttbl = $conn->query($email_check_query_requesttbl);
            
            if ($result_registertbl->num_rows == 0) {
                $message = "Email is not registered!";
                echo "<script>alert('$message'); window.location.href='../index.html';</script>";
            } elseif ($result_requesttbl->num_rows > 0) {
                $message = "You have already requested for a password change!";
                echo "<script>alert('$message'); window.location.href='../index.html';</script>";
            } else {
                // Insert data into requesttbl
                $insert_query = "INSERT INTO requesttbl (fullname, email) VALUES ('$fullname', '$email')";
                if ($conn->query($insert_query) === TRUE) {
                    $message = "Request sent successfully";
                    echo "<script>alert('$message'); window.location.href='../index.html';</script>";
                } else {
                    echo "Error inserting data: " . $conn->error;
                }
            }
        }
    }
?>
