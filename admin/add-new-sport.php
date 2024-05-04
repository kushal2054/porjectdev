<?php
// Check if the form is submitted
if(isset($_POST['save'])) {
    // Check if the required fields are filled
    if(isset($_FILES['image']['tmp_name']) && isset($_POST['title']) && isset($_POST['description'])) {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'register');
        
        // Check connection
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }
        
        // Prepare data for insertion
        $title = $conn->real_escape_string($_POST['title']);
        $description = $conn->real_escape_string($_POST['description']);
        
        // Image upload
        $image = $_FILES['image']['tmp_name']; // Temporary file path
        $imageData = addslashes(file_get_contents($image)); // Convert image to binary data
        
        // SQL query to insert data into the table
        $query = "INSERT INTO sporttbl (image, title, description) VALUES ('$imageData', '$title', '$description')";
        
        // Execute query
        if ($conn->query($query) === TRUE) {
            $message = "Sports Added Successful!";
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
