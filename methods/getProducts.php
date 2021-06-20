<?php
include_once dirname(__FILE__) . '/../models/product.php';
include_once dirname(__FILE__) . '/../includes/dbh.inc.php';

$product = new Product($conn);
$result = $product->getProducts();
$nr = mysqli_num_rows($result);
$products = array();

if ($nr > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $post_item = array(
            'id' => $id,
            'title' => $title,
            'details' => $details,
            'price' => $price
        );

        array_push($products, $post_item);
    }

    echo json_encode($products);
}
