<?php
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Worker Safety Store</title>
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="Shop.php">Shop</a></li>
                        <li><a href="contact.php">Contact</a></li>
    
                        <?php
                        if (isset($_SESSION["userUid"])) {
                            echo "<li><a href='profile.php'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='account.php'>Account</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
                <a href="cart.php">
                    <img src="images\shopping-cart.png" width="30px" height="30px">
                    <span>0</span>
                </a>
                <img src="images\menu-icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col2">
                    <h1>
                        Safety first!
                    </h1>
                    <p>Don't take unnecessary risks and protect yourself!</p>
                    <a href="Shop.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col2">
                    <img src="images\background.png">
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col3">
                    <img src="images\category1.jpg">
                </div>
                <div class="col3">
                    <img src="images\category2.jpg">
                </div>
                <div class="col3">
                    <img src="images\category3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col4">
                <a href="product-details-1.php">
                    <img src="images\product1.jpg">
                </a>
                <h4>JORESTECH Hard Hat White ABS Work-At-Height and Rescue Slotted Ventilated Helmet with 6-Point
                    Ratchet Suspension ANSI Z89.1-14 Certified For Work, Home, and General Headwear Protection HHAT-04
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$26.99</p>
            </div>
            <div class="col4">
                <a href="product-details-2.php">
                    <img src="images\product2.jpg"></a>
                <h4>Humble Bee 210 Polycotton Beekeeping Veil with Round Hat</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p>$39.95</p>
            </div>
            <div class="col4">
                <a href="product-details-3.php">
                    <img src="images\product3.jpg"></a>
                <h4>TSLA Men's Winter Ski Jacket, Waterproof Warm Insulated Snow Coats, Cold Weather Windproof Snowboard
                    Jacket with Hood</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$79.98</p>
            </div>
            <div class="col4">
                <a href="product-details-4.php">
                    <img src="images\product4.jpg"></a>
                <h4>COPOZZ Wetsuit for Men and Women 3mm Neoprene Full Wetsuit, Back Zip Long Sleeve One Piece Wetsuit
                    Jumpsuit for Scuba Diving Surfing Snorkeling</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$67.99</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col4">
                <a href="product-details-5.php">
                    <img src="images\product5.jpg"></a>
                <h4>Ergodyne Arsenal 5005P Large Polyester Firefighter Rescue Turnout Fire Gear Bag with Shoulder Strap
                    and Helmet Pocket
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$38.37</p>
            </div>
            <div class="col4">
                <a href="product-details-6.php">
                    <img src="images\product6.jpg"></a>
                <h4>LINE2design Firefighter Glove Strap - Emergency Rescue Turnout Gear Heavy Duty Reflective Gloves
                    Safety Leash - First Responders EMTs Construction and Mechanics Adjustable Work Glove Holder - Green</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$8.49</p>
            </div>
            <div class="col4">
                <a href="product-details-7.php">
                    <img src="images\product7.jpg"></a>
                <h4>Ur Shield FR Shirt - Fire Resistant Shirt - Work Shirt - Welding Shirt XL, Navy Blue Fire Retardant
                    Shirt - FR Clothing for Welders & Electricia</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                </div>
                <p>$39.99</p>
            </div>
            <div class="col4">
                <a href="product-details-8.php">
                    <img src="images\product8.jpg"></a>
                <h4>McGuire-Nicholas 526-CC Brown Professional Electrician'S Pouch, oil tanned leather
                </h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>$27.65</p>
            </div>
        </div>

    </div>

    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col2">
                    <img src="images\offer1.png" class="offer-img">
                </div>
                <div class="col2">
                    <p>Exclusively Available on Worker Safety Store</p>
                    <h1>Firefighter Training Regulator</h1>
                    <small>Breathing Resistance XRT Pro 2.0 Trainer for Scott AV-2000 & AV-3000 SCBA Mask</small>
                    <a href="product-details-9.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- creators -->
    <div class="creators">
        <div class="small-container">
            <h2 class="title">Page creators</h2>
            <div class="row">
                <div class="col2">
                    <img src="images\creator1.jpg">
                    <h3>Alexandrescu Nicolae</h3>
                </div>
                <div class="col2">
                    <img src="images\creator2.jpg">
                    <h3>Vacaru Stefan Robert</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col5">
                    <img src="images\brand1.png">
                </div>
                <div class="col5">
                    <img src="images\brand2.png">
                </div>
                <div class="col5">
                    <img src="images\brand3.png">
                </div>
                <div class="col5">
                    <img src="images\brand4.png">
                </div>
                <div class="col5">
                    <img src="images\brand5.jpg">
                </div>
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