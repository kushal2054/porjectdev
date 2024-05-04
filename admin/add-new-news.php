<?php
// Check if the form is submitted
if(isset($_POST['save'])) {
    // Check if the required fields are filled
    if(isset($_FILES['image']['tmp_name']) && isset($_POST['newstitle']) && isset($_POST['newsdescription'])) {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'register');
        
        // Check connection
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }
        
        // Prepare data for insertion
        $newstitle = $conn->real_escape_string($_POST['newstitle']);
        $newsdescription = $conn->real_escape_string($_POST['newsdescription']);
        
        // Image upload
        $image = $_FILES['image']['tmp_name']; // Temporary file path
        $imageData = addslashes(file_get_contents($image)); // Convert image to binary data
        
        // SQL query to insert data into the table
        $query = "INSERT INTO newstbl (image, newstitle, newsdescription) VALUES ('$imageData', '$newstitle', '$newsdescription')";
        
        // Execute query
        if ($conn->query($query) === TRUE) {
            $message = "News Added Successful!";
            echo "<script>alert('$message'); window.location.href='service.php';</script>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        
        // Close connection
        $conn->close();
    } else {
        echo "All fields are required";
    }
}
?>
