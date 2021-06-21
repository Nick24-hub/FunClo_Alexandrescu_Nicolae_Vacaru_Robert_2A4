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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'structure/header.php'; ?>
    <?php
       if (isset($_SESSION["userId"])) {
          setcookie("userUid", $_SESSION["userId"], time()+2*24*60*60);            
        }
    ?>
    <div class="contact">
        <div class="contact-text">
            <form class="contact-items">
                <h2>Submit Your Order</h2>
                <input type="text" id="name"  placeholder="Name">
                <input type="text" id="address"  placeholder="Address">
                <input type="text" id="phone"  placeholder="Phone Number">
                <button type="submit" id="order-submit" name="order-submit"  class="btn">Submit</button>
                <?php
                            if (isset($_GET["order-submit"])) {
                                if ($_GET["order-submit"] == "") { {
                                        echo '<h2>Order submited!</h2>';
                                    }
                                }
                            }
                            ?>
            </form>
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
    <script src="order.js"></script>
    <script src="main.js"></script>
    
</body>

</html>