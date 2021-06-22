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
            <form class="contact-items" action="includes/contact.inc.php" method="POST">
                <h2>Contact Us</h2>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="text" placeholder="Text">
                <button type="submit" name="contact-submit" class="btn">Contact</button>
                <?php if (isset($_GET["error"])) {
                    if ($_GET["error"] =="emptyinput")
                        {echo "<h2>Fill in all fields!</h2>";}
                    else if ($_GET["error"] == "stmtFailed")
                        {echo "<h2>Something went wrong!</h2>";}
                    else if ($_GET["error"] == "none")
                        {echo "<h2>You submitted the form the corect way!</h2>";}
                }
                ?>
            </form>

            <!-- <div class="contact-items" action="includes/contact.inc.php" method="POST">
                
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="email" placeholder="Your Email">
                <textarea cols="20" rows="20" name="text" placeholder="Your Message here"></textarea>
                <button type="submit" name="contact-submit" class="btn">Submit</button>
            </div> -->
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