<?php

class Product
{
    private $conn;

    public $id;
    public $title;
    public $details;
    public $price;
    public $type;
    public $small_desc;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addProduct($title, $details, $price, $type,$small_desc)
    {
        if ($title != null && $details != null && $price != null) {
            $sql = "INSERT INTO product (title, details, price) VALUES ('" . $title . "','" . $details . "','" . $price . "')";
            mysqli_query($this->conn, $sql);
        }
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id =" . $id;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getSkiProducts()
    {
        $sql = "SELECT * FROM product where type ='Ski Equipment'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getDivingProducts()
    {
        $sql = "SELECT * FROM product where type ='Diving Equipment'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getWorkerProducts()
    {
        $sql = "SELECT * FROM product where type ='Worker Safety Equipment'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getFirefighterProducts()
    {
        $sql = "SELECT * FROM product where type ='Firefighter Safety Equipment'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
