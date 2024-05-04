<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="b1">
    
    <div id="header">
        
            <div class="img">
                <a href="../page1/index.html" ><img src="../image/logo.png" id="img1"></a>
            </div>
            <div class="">
        <button class="notificationButton log129" onclick="toggleNotification()"><i class="fa fa-bell" aria-hidden="true"></i></button>
        <div class="notificationMessage hidden">
         <span class="notcloseButton" onclick="hideNotification()">&times;</span>
         <p>1. Welcome to the platform.</p>
         <p>2. There is new video uploaded.</p>
        </div>
        </div>
                
            <div class="log1276">
                <a href="../page1/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logut</a>
            </div>
            <div class="log1276">
                <a href="../page1/live.php"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
            </div>
        
    </div>

    <div class="container1223">
        <h2>User Profile</h2>
        
  

        <?php
session_start(); // Start the session to access logged-in user's information

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'register');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

if (isset($_SESSION['regid'])) { // Check if the user is logged in
    $regid = $_SESSION['regid'];
    $query = "SELECT * FROM registertbl WHERE regid = '$regid'";
    $result = $conn->query($query);
    while ($resultitem = $result->fetch_assoc()) {
        ?>
        <div class="profile-picture">
        <img src="data:image/jpeg;base64,<?= base64_encode($resultitem['image']); ?>" alt="<?= $resultitem['regid']; ?>">
        </div>
        <?php
    }
} else {
    ?>
    <p>No records found</p>
    <?php
}
?>







        
        <div class="user-details">
            <h3>User Details</h3>
        </div>
     <div class=""form1234>
            <?php
session_start(); // Start the session to access logged-in user's information
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'register');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    if (isset($_SESSION['regid'])) { // Check if the user is logged in
        $regid = $_SESSION['regid'];
        $query = "SELECT * FROM registertbl WHERE regid = '$regid'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Regid</th>
                        <th>Fullname</th>
                        <th>Country</th>
                        <th>Contact Number</th>
                        <th>Selected Sport</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($resultitem = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $resultitem['regid']; ?></td>
                            <td><?= $resultitem['fullname']; ?></td>
                            <td><?= $resultitem['country']; ?></td>
                            <td><?= $resultitem['contactnum']; ?></td>
                            <td><?= $resultitem['sport']; ?></td>
                            <td><?= $resultitem['email']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<p>No record found</p>";
        }
    } else {
        echo "No user logged in"; // Provide a message if the user is not logged in
    }
}
?>
</div>

            </tbody>
        </table>
        <form class="form1234" action="updateuser.php" method="post" enctype="multipart/form-data">
            <label for="photo">Upload Photo:</label>
            <input type="file" id="image" name="image" class="form-control">
            
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" >

            <div class="password-container">
            <label for="password">Update Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your New password" >
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <i class="fas fa-eye " style="color: #0285C8; font-size:25px; "></i> 
                </span>
            </div>


            
           
           
            
            <label for="Contact Number">Update Contact Number:</label>
            <input type="tel" id="contactnum" name="contactnum" placeholder="Enter your new contact number" >
            <label for="sport" >Update Preferred Sport:</label>
             <select id="sports" name="sport" required>
                <option>Select Sport</option>
                <option value="athletics">Athletics</option>
                <option value="swimming">Swimming</option>
                <option value="gymnastics">Gymnastics</option>
                <option value="cycling">Cycling</option>
                <option value="basketball">Basketball</option>
                <option value="football">Football (Soccer)</option>
                <option value="volleyball">Volleyball</option>
                <option value="tennis">Tennis</option>
                <option value="table-tennis">Table Tennis</option>
                <option value="badminton">Badminton</option>
                <option value="boxing">Boxing</option>
                <option value="weightlifting">Weightlifting</option>
                <option value="wrestling">Wrestling</option>
                <option value="judo">Judo</option>
                <option value="taekwondo">Taekwondo</option>
                <option value="archery">Archery</option>
                <option value="shooting">Shooting</option>
                <option value="fencing">Fencing</option>
                <option value="rowing">Rowing</option>
                <option value="sailing">Sailing</option>
                <option value="canoeing">Canoeing</option>
                <option value="equestrian">Equestrian</option>
                <option value="golf">Golf</option>
                <option value="rugby">Rugby</option>
            </select>
            <br><br>
            <input type="submit" value="Update Profile">
        </form>
    </div>
</div>
    

    <div class="footer-liv"> 
        <div class="menu10">
            <div class="foot-img-live">
                <img class="foot-img2" src="../image/whitelogo.png">
            </div>
           
           
        </div> 
      
        <div class="download">
            <ul>
                <li><a href=""><img class="app-img" src="../image/apple.png"></a></li>
                <li><a href=""><img class="and-img" src="../image/android.jpeg"></a></li>
            </ul>

        </div>      
        <div class="social">
            <ul>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="copyright" >
            <ul>
                <li><i class="fa-solid fa-copyright"></i></li>
                <li><p>Copyright 2024. All rights reserved</p></li>
            </ul>
        </div>
    </div>

    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
<script src="../page/script.js"></script>

</body>
</html>
