<?php 
class Orders
{
    private $conn;
    public $id;
    public $idUser;
    public $name;
    public $phone;
    public $address;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function getOrders($idUser)
    {
        $sql = "SELECT * FROM orders WHERE userId =" . $idUser;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}