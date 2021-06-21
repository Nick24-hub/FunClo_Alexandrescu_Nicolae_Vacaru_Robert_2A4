<?php 
include_once dirname(__FILE__) . '/../models/orders.php';
include_once dirname(__FILE__) . '/../includes/dbh.inc.php';

$product = new Orders($conn);
$result = $product->getOrders($_COOKIE["userUid"]);
$nr = mysqli_num_rows($result);
$orders = array();

if ($nr > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $post_item = array(
            'id' => $row['id'],
            'idUser'=>$row['idUser'],
            'name' => $row['name'],
            'phone' => $row['phone'],
            'address' => $row['address']
        );

        array_push($orders, $post_item);
    }
    echo json_encode($orders);
}
