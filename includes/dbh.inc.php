<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="funclo_database";

$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
    die("Connection fail:".mysqli_connect_error());
}