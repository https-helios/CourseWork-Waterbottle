<?php
include_once("connection.php")

//User Table
$stmt = $conn->prepare("
    DROP TABLE IF EXISTS Users;
    CREATE TABLE Users (
            userID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            userType TINYINT(1) DEFAULT 1,
            email VARCHAR(50) UNIQUE NOT NULL,
            password VARCHAR(300) NOT NULL,
            firstname TINYTEXT(50) NOT NULL,
            surname TINYTEXT(50) NOT NULL,
            telephone VARCHAR(11) NOT NULL,
            postcode VARCHAR(7) NOT NULL,
            addressLine VARCHAR(20) NOT NULL,
            cardNo VARCHAR(16) NOT NULL,
            cardName VARCHAR(60) NOT NULL,
            cardExpiry CHAR(5) NOT NULL,
            cardCVC CHAR(4) NOT NULL
    )    

");
$stmt->execute();
$stmt->closeCursor();
echo ("<br>Users Table is Created");
//products table
$stmt=$conn->prepare("
        DROP TABLE IF EXISTS Products;
        CREATE TABLE Products  (
            itemID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description VARCHAR(1000) NOT NULL,
            productImage VARCHAR(100) NOT NULL,
            dimensionImage VARCHAR(100) NOT NULL,
            soldOut BOOL NOT NULL,
            price             

        )

")

?>