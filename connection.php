<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "waterBottleShop";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected successfully";
        //试 + 记得注释掉
}
catch(PDOException $e) {
    echo "connection failed: " . $e->getMessage();
    //式
}
?>