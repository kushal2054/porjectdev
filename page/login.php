

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="b2">
    <div></div>
    <div class="img-signup"></div>
    <div class="container122">
       
        <div class="form1" >
         <form action="../page/auth.php" method="post">   
            <a href="../index.html" ><img src="../image/logo.png" id="sign-img1"></a>
            <h2 class="reg">Login</h2>
            <label for="email">Email</label>
            <br>
            <input type="text" placeholder="Email" id="Email" name="email" required>
            <br><br>
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" placeholder="Password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <i class="fas fa-eye" style="color: #0285C8;"></i> 
                </span>
            </div>
            <br><br>
            <button class="butn success">Submit</button>
            <br><br>
            <div class="text12">
                <a href="../page/emailverify.html" class="log2" style="text-decoration:none; font-family: sans-serif;">Forgot Password</a>
            </div>
            <br><br>
            <div class="text123" style=" font-family: sans-serif;">
                Create an account??
                <a href="../page/signup.html" class="log2" style="text-decoration:none; font-family: sans-serif;">SignUp</a>
            </div>
        </form>
        </div>
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

