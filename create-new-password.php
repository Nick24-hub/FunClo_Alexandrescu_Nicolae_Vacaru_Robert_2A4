<?php
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Worker Safety Store</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'structure/header.php'; ?>
    <div class="contact">
        <div class="contact-text">
            <?php
            $selector=$_GET["selector"];
            $validator=$_GET["validator"];
            if(empty($selector)||empty($validator))
            {
                echo "We could not validate your request";
            }else{
                if(ctype_xdigit($selector)!==false && ctype_xdigit($validator)!==false)
                {?>
                <form class="contact-items" action="includes/reset-password.inc.php" method="POST">
                <h2>Resset Password</h2>
                <input type="hidden" name="selector" value="<?php echo $selector;?>">
                <input type="hidden" name="validator" value="<?php echo $validator;?>">
                <input type="password" name="pwd" placeholder="Enter your password">
                <input type="password" name="pwd-repeat" placeholder="Repeat your password">
                <button type="submit" name="reset-password-submit" class="btn">Reset password</button>
            </form>
                 <?php
                }
            }
            ?>
            
        </div>
    </div>

    <!-- footer -->
    <?php include 'structure/footer.php'; ?>
    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="main.js"></script>
</body>

</html>