<?php

//include the connection file
include('connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

//create an instance of Connection class
$connection = new connection();
$connection->createDatabase('projet2');

$connection->selectDatabase('projet2');

$query0 = "
CREATE TABLE Cities (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL
    )
";
$query = "
CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idCity INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idCity) REFERENCES Cities(id)
)
";
$query1="
CREATE TABLE Category (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    description TEXT
)
";
$query3 = "
CREATE TABLE Products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL 
)
";
//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('projet2');

//call the createTable method to create table with the $query
$connection->createTable($query0);
$connection->createTable($query);
$connection->createTable($query1);
$connection->createTable($query3);


// create the Products table

// call the createTable method to create the Products tabl
?>

