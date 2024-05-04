<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="b1">
    
<div id="header">
        
        <div class="img">
            <a href="../page1/index.html"><img src="../image/logo.png" id="img1"></a>
        </div>


        <div class="dropdown">
           <nav class="dropdown-content">
            <a href="../page1/index.html" class="home12">Home</a>
            <a href="http://localhost/projectdev/page1/sports.php" class="sport12">Sports</a>
            <a href="http://localhost/projectdev/page1/news.php" class="news12">News</a>
            <a href="../page1/highlight.html" class="highlight12">Highlights</a>
            <a href="http://localhost/projectdev/page1/live.php" class="live12">Live</a>
            <a href="../page1/venue.html"class="venue12">Venues</a>
            <a href="../page1/schedule.html" class="schedule12">Game Schedule</a>
            <a href="../page1/result.html" class="result12">Result</a>
            <a href="../page1/contact.html" class="contact12">Contact Us</a>
            <a href="../page1/about.html" class="about12">About</a>
           </nav> 
        </div> 

        <div class="log1298">
    <button class="notificationButton" onclick="toggleNotification()"><i class="fa fa-bell" aria-hidden="true"></i></button>
    <div class="notificationMessage hidden">
     <span class="notcloseButton" onclick="hideNotification()">&times;</span>
     <p>1. Welcome to the platform.</p>
             <p>2. There is new video uploaded.</p>
    </div>
    </div>


    <div class="log123456">
         <div class="log12345">
           <a href="../page1/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
         </div>
         <div class="log1234">
  
             <a href="normaluser.php?email=<?= $_SESSION['email']; ?>&regid=<?= $_SESSION['regid']; ?>"><i class="fa-regular fa-user"></i>User</a>

        </div>
    </div>
</div>


    <div class="container-sport">
    
        <?php
        $conn = new mysqli('localhost', 'root', '', 'register');

        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
                } else {
                        $query = "SELECT image, title, description FROM sporttbl";
                        $result = $conn->query($query);

                         if ($result->num_rows > 0) {
                               while ($resultitem = $result->fetch_assoc()) {
        ?>   
            <div class="sport">            
            <img src="data:image/jpeg;base64,<?= base64_encode($resultitem['image']); ?>" alt="<?= $resultitem['title']; ?>">
            <h2><?= $resultitem['title']; ?></h2>
            <p><?= $resultitem['description']; ?></p>
            </div>
        <?php
        }
          } else {
        ?>
         <p>No records found</p>
        <?php
         }
        }
        ?>
   
</div>
    
    <div class="footer"> 
        <div class="menu3">
            <div class="foot-img">
                <a href="../index.html"><img class="foot-img2" src="../image/whitelogo.png"></a>
            </div>
            <div class="foot-menu1" >
                <ul>
                    <li><a href="index.html">Olympics</a></li>
                    <li><a href="index.html">Result & Medals</a></li>
                    <li><a href="index.html">Highlights</a></li>
                    <li><a href="index.html">TV Channel</a></li>
                    <li><a href="index.html">Venue</a></li>
                </ul>
            </div>
            <div class="foot-menu2" >
                <ul>
                    <li><a href="index.html">Live Events</a></li>
                    <li><a href="index.html">Sports</a></li>
                    <li><a href="index.html">News</a></li>
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div> 
        <div class="menu2" >
            <ul>
                <li><a href="index.html">International Olympic Committee</a></li>
                <li><a href="index.html">Sports</a></li>
                <li><a href="index.html">Site Map</a></li>
                <li><a href="index.html">Contact Center</a></li>
                <li><a href="index.html">About Us</a></li>
            </ul>
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
        // Get the current page URL
        var currentPageUrl = window.location.href;
    
        // Get all the menu links
        var menuLinks = document.querySelectorAll('nav a');
    
        // Loop through each menu link
        menuLinks.forEach(function(link) {
            // Check if the link href matches the current page URL
            if (link.href === currentPageUrl) {
                // Add a class to highlight the active link
                link.classList.add('active');
            }
        });
    </script>
<script src="../page/script.js"></script>
</body>
</html>