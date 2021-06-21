<?php
require 'includes/dbh.inc.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$productsInCart=$_POST['productsInCart'];
$totalCosts=$_POST['totalCosts'];
$userId=$_COOKIE["userUid"];
$sql = "INSERT INTO orders(name,phone,address,productsInCart,totalCosts,userId) values (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssssss",$name, $phone, $address,$productsInCart,$totalCosts,$userId);
        mysqli_stmt_execute($stmt);
    }
mysqli_stmt_close($stmt);
mysqli_close($conn);
