<?php

$fullname = $_POST['fullname'];
$country = $_POST['country'];
$contactnum = $_POST['contactnum'];
$sport = $_POST['sport'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$is_ban = $_POST['is_ban']== true ? 1:0;

//database connection

$conn = new mysqli('localhost','root','','register');
if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registertbl(fullname, country, contactnum, sport, email, password,role,is_ban) values(?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssissssi", $fullname, $country, $contactnum, $sport, $email, $password,$role,$is_ban);

    
    if ($stmt->execute()) {
        $message = "Registration successful!";
        echo "<script>alert('$message'); window.location.href='user.php';</script>";
        exit(); // Make sure to exit after sending the script to prevent further execution
    } else {
        die('Error: ' . $stmt->error);
    }
 
    $stmt->close();
    $conn->close();
    
}

?>
