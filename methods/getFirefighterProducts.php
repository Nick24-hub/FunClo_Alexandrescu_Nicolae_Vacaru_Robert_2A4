<?php

include_once dirname(__FILE__) . '/../models/product.php';
include_once dirname(__FILE__) . '/../includes/dbh.inc.php';

$product = new Product($conn);
$result = $product->getFirefighterProducts();
$nr = mysqli_num_rows($result);
$products = array();

if ($nr > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $post_item = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'details' => $row['details'],
            'price' => $row['price'],
            'type' => $row['type'],
            'small_desc' => $row['small_desc']
        );

        array_push($products, $post_item);
    }

    echo json_encode($products);
}