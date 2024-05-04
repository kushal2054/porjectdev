<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        $reqid = $_POST['reqid'];

        // Function to send email
        function sendPasswordChangeEmail($email) {
            // Code to send email goes here
            // You can use PHP's mail function or a library like PHPMailer to send emails
            // Example using PHP's mail function:
            $to = $email;
            $subject = 'Password Change Request';
            $message = 'Please click the link to change your password.';
            $headers = 'From: your_email@example.com';

            mail($to, $subject, $message, $headers);
        }

        // Call the function to send email
        sendPasswordChangeEmail($email);

        // Delete the record from the requesttbl
        $conn = new mysqli('localhost', 'root', '', 'register');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        } else {
            $query = "DELETE FROM requesttbl WHERE reqid=$reqid";
            if ($conn->query($query) === TRUE) {
                $message = "Request Send Successfully";
            echo "<script>alert('$message'); window.location.href='user-password-request.php';</script>";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Email not provided";
    }
} else {
    echo "Invalid request method";
}

?>
