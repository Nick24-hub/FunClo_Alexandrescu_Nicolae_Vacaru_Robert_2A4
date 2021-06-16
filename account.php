<?php include 'structure/header-shop.php';?>
<link rel="stylesheet" href="shop.css">
<html>
<body>
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

    <?php include 'structure/footer.php';?>
     

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

</body>

</html>