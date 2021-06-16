<?php include 'structure/header-shop.php'; ?>
<html>
<link rel="stylesheet" href="contact.css">

<body>
    <?php if (isset($_GET["error"])) {
        if ($_GET["error"] = "emptyinput")
            echo "<h2>Fill in all fields!</h2>";
        else if ($_GET["error"] = "stmtFailed")
            echo "<p>Something went wrong!</p>";
        else if ($_GET["error"] = "none")
            echo "<p>You signed up!</p>";
    }
    ?>
    <div class="contact">
        <div class="contact-text">
            <form class="contact-items" action="includes/contact.inc.php" method="POST">
                <h2>Contact Us</h2>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="text" placeholder="Text">
                <button type="submit" name="contact-submit" class="btn">Contact</button>
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
</body>

</html>