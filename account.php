<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Worker Safety Store</title>
    <link rel="stylesheet" href="Shop.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images\logo.png" width="150px" height="150px">
                    </a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html">
                    <img src="images\shopping-cart.png" width="30px" height="30px">
                    <span>0</span>
                </a>
                <img src="images\menu-icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!---- account page ---->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col2">
                    <img src="images\background.png" width="100%">
                </div>
                <div class="col2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <?php
                          if(isset($_GET["error"]))
                           {
                               if($_GET["error"]="emptyinput")
                                    echo "<p>Fill in all fields!</p>";
                                else if($_GET["error"]="wrongLogin")
                                    echo "<p>Incorrect Login credentials!</p>";
                     
                           }
                         ?>
                        <form id="LoginForm" action="includes/login.inc.php" method="POST">
                            <input type="text" name = "uid" placeholder="Username\Email">
                            <input type="password" name ="pwd" placeholder="Password">
                            <button type="submit" name="login-submit" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>
                        <?php
                          if(isset($_GET["error"]))
                           {
                               if($_GET["error"]="emptyinput")
                                    echo "<p>Fill in all fields!</p>";
                               else if($_GET["error"]="invalidUid")
                                    echo "<p>You entered an invalid Uid!</p>";
                               else if($_GET["error"]="invalidEmail")
                                    echo "<p>You entered an invalid Email!</p>";
                               else if($_GET["error"]="invalidMatchPwd")
                                    echo "<p>You passwords don't match!</p>";
                                else if($_GET["error"]="usernameTaken")
                                    echo "<p>You entered an username that is already in use!</p>";
                                else if($_GET["error"]="stmtFailed")
                                    echo "<p>Something went wrong!</p>";
                                else if($_GET["error"]="none")
                                    echo "<p>You signed up!</p>";
                     
                           }
                         ?>
                        <form id="RegForm" action="includes/signup.inc.php" method="post">
                            <input type="text" name="username" placeholder="Full name">
                            <input type="text" name="uid" placeholder="Username">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="pwd" placeholder="Password">
                            <input type="password" name="pwd-repeat" placeholder="Confirm Password">
                            <button type="submit" name="register-submit" class="btn">Register</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images\app-logo1.png">
                        <img src="images\app-logo2.png">
                    </div>
                </div>
                <div class="footer-col2">
                    <img src="images\logo.png">
                    <p>Our Purpose Is To Sustainably Make You Feel Safe While Doing Your Activities.</p>
                </div>
                <div class="footer-col3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 Worker Safety Store</p>
        </div>
    </div>
     

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- js for toggle form -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0)";
        }
    </script>

<script src="main.js"></script>

</body>

</html>