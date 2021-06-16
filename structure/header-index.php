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
                        if(isset($_SESSION["userUid"]))
                        {
                            echo "<li><a href='profile.php'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else {
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
                    <a href="Shop.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col2">
                    <img src="images\background.png">
                </div>
            </div>
        </div>
    </div>