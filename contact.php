
<?php include 'structure/header-shop.php';?>
<html>
<link rel="stylesheet" href="contact.css">
<body>
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
</body>

</html>