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
            <div class="contact-items">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="Your Email">
                <textarea cols="20" rows="20" placeholder="Your Message here"></textarea>
                <a href="">Submit</a>
            </div>
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