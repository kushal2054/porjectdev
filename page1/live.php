

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>live</title>
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
      
        <?php


// Check if the user is logged in
session_start(); // Start the session
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'register');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data based on email
    $stmt = $conn->prepare("SELECT * FROM registertbl WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user data is found
    if ($result->num_rows > 0) {
        // Fetch user data from the result set
        $row = $result->fetch_assoc();
        // Store user email and regid in session
        $_SESSION['email'] = $row['email'];
        $_SESSION['regid'] = $row['regid'];

        // Generate the user button with session data
        ?>
        <a href="normaluser.php?email=<?= $_SESSION['email']; ?>&regid=<?= $_SESSION['regid']; ?>"><i class="fa-regular fa-user"></i>User</a>
        <?php
    } else {
        echo "No records found for the logged-in user.";
    }

    // Close database connection
    $conn->close();
} else {
    echo "User is not logged in.";
}
?>
        </div>
    </div>
    </div>

    <div id="overlay">
        <div id="popup">
            <img class="imgtut" src="../image/livetut.jpg" alt="Tutorial Image">
            <button id="closeButton12">Close</button>
        </div>
    </div>

    <div class="container-hig">
        <h1 class="container-hig-heading">FunOlympic Live Broadcast </h1>
        <div class="container142">
            <h2>FunOlympic 2024 - Live - Basketball - Spain vs USA</h2>
            <div class="row">
                
                <div class="col">
                    <div class="feature-img">
                        <img src="../image/basketball.jpeg" width="100%">
                        <img src="../image/play.png" class="play-btn" id="playBtn" onclick="playVideo('../media/live.mp4')">
                        <img src="../image/live.png" class="live-btn2">
                        
                    </div>
                </div>
                <div class="col">
                    <h2>Related Live Broadcast</h2>
                    <div class="small-img-row">
                        
                        <div class="small-img">
                            <img src="../image/cycle.jpeg">
                            <img src="../image/play.png" class="play-btn" onclick="playVideo('../media/live3.mp4')">
                            
                        </div> 
                        <p> FunOlympic 2024 -Live - Cycling BMX<br>Freestyle Men's Park</p>
                    </div>
                    
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="../image/table.jpeg">
                            <img src="../image/play.png" class="play-btn" onclick="playVideo('../media/table.mp4')">
                            
                        </div> 
                        <p> FunOlympic 2024 - Live - Table Tennis<br>Ma Long 🇨🇳 vs Fan Zhendong 🇨🇳</p>
                    </div>
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="../image/swimming.jpeg">
                            <img src="../image/play.png" class="play-btn" onclick="playVideo('../media/live1.mp4')">
                           
                        </div> 
                        <p>FunOlympic 2024 - Live - Swimming<br>1st day of swimming at Aquatics Center!</p>
                    </div>
                
                </div>
            </div>
            <div class="button123">
            <button class="button12">
                <i class="fas fa-thumbs-up"></i> Like
              </button>
              
              <button class="button12">
                <i class="fas fa-share"></i> Share
              </button>
              
              <button class="button12">
                <i class="fas fa-comment"></i> Comment
              </button>
            </div>
            <br><br><br>
            
        <div class="spt-con">
        <h1 style="padding: 30px; padding-left:400px;">Live Scores</h1>
            <div class="sport-container" id="basketball">
                <h2>Basketball Live Score</h2>
                <h2>Venue: Pierre Mauroy Stadium</h2>
                <div class="score-container">
                    <div class="score">USA vs Spain</div>
                    <div class="team-name">Score: 85 - 80</div>
                </div>
            </div>
            
            <div class="sport-container" id="football">
                <h2>Football Live Score</h2>
                <h2>Venue: Parc des Princes</h2>
                
                <div class="score-container">
                    <div class="score">Brazil vs Germany</div>
                    <div class="team-name">Score: 2 - 1</div>
                </div>
            </div>
            
            <div class="sport-container" id="table-tennis">
                <h2>Table Tennis Live Score</h2>
                <h2>Venue: Porte de Versailles</h2>
                <div class="score-container">
                    <div class="score">Ma Long vs Fan Zhen</div>
                    <div class="team-name">Score: 3 - 2</div>
                </div>
            </div>
            
            <div class="sport-container" id="badminton">
                <h2>Badminton Live Score</h2>
                <h2>Venue: Chapelle Arena</h2>
                <div class="score-container">
                    <div class="score">India vs Korea</div>
                    <div class="team-name">Score: 21 - 18</div>
                </div>
            </div>
        </div>
    
      <div class="video-player" id="videoPlayer">
        <video width="100%" controls id="myVideo">
            <source src="../media/live3.mp4" type="video/mp4">
        </video>
        <img src="../image/close.png" class="close-btn" onclick="stopVideo()">
        <img src="../image/live.png" class="live-btn">
        <div class="button123">
            <button class="button12">
                <i class="fas fa-thumbs-up"></i> Like
              </button>
              
              <button class="button12">
                <i class="fas fa-share"></i> Share
              </button>
              
              <button class="button12">
                <i class="fas fa-comment"></i> Comment
              </button>
            </div>
    </div>
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
        var videoPlayer = document.getElementById("videoPlayer");
        var myVideo = document.getElementById("videoPlayer");
    
            function stopVideo() {
        var videoPlayer = document.getElementById("myVideo");
        videoPlayer.pause();
        var videoContainer = document.getElementById("videoPlayer");
        videoContainer.style.display = "none";  
        }
    
        function playVideo(file) {
        var videoPlayer = document.getElementById("myVideo");
        videoPlayer.src = file;
        videoPlayer.play();
        var videoContainer = document.getElementById("videoPlayer");
        videoContainer.style.display = "block";
        }
    
        </script>

<script>
    // Simulated live score data
    function updateScores() {
        document.getElementById('basketball').querySelector('.score-container').innerHTML = `
            <div class="score">USA vs Spain</div>
            <div class="team-name">Score: ${Math.floor(Math.random() * 100)} - ${Math.floor(Math.random() * 100)}</div>
        `;
        
        document.getElementById('football').querySelector('.score-container').innerHTML = `
            <div class="score">Brazil vs Germany</div>
            <div class="team-name">Score: ${Math.floor(Math.random() * 5)} - ${Math.floor(Math.random() * 5)}</div>
        `;
        
        document.getElementById('table-tennis').querySelector('.score-container').innerHTML = `
            <div class="score">Ma Long vs Fan Zhen</div>
            <div class="team-name">Score: ${Math.floor(Math.random() * 5)} - ${Math.floor(Math.random() * 5)}</div>
        `;
        
        document.getElementById('badminton').querySelector('.score-container').innerHTML = `
            <div class="score">India vs Korea</div>
            <div class="team-name">Score: ${Math.floor(Math.random() * 30)} - ${Math.floor(Math.random() * 30)}</div>
        `;
    }

    // Update scores every 5 seconds
    setInterval(updateScores, 5000);

    // Initial update
    updateScores();
</script>
<script>
  function toggleNotification() {
    const message = document.querySelector('.notificationMessage');
    if (message.classList.contains('hidden')) {
      message.classList.remove('hidden');
    } else {
      message.classList.add('hidden');
    }
  }

  function hideNotification() {
    const message = document.querySelector('.notificationMessage');
    message.classList.add('hidden');
  }
</script>

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
      var overlay = document.getElementById('overlay');
      overlay.style.display = 'block';
      
      var closeButton = document.getElementById('closeButton12'); // Update id to 'closeButton12'
      closeButton.addEventListener('click', function() {
        overlay.style.display = 'none';
      });
    });
</script>
<script src="../page/script.js"></script>
</body>
</html>