<?php

class Product
{
    private $conn;

    public $title;
    public $details;
    public $price;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addProduct($title, $details, $price)
    {
        if ($title != null && $details != null && $price != null) {
            $sql = "INSERT INTO product (title, details, price) VALUES ('" . $title . "','" . $details . "','" . $price . "')";
            mysqli_query($this->conn,$sql);
        }
    }

    public function getProduct($id)
    {
        $sql="SELECT * from product WHERE id =" . $id;
        $result =mysqli_query($this->conn,$sql);
        return $result;
    }

    public function getProducts()
    {
        $sql="SELECT * from product";
        $result =mysqli_query($this->conn,$sql);
        return $result;
    }

}
