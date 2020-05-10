<?php

$servername = "localhost";
$username = "root";
$password = "secret";
$dbname = "PIM";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM Products WHERE id=". $_GET['id'];

$conn->exec($sql);

header('Location: /06-demo-product-inventry-mangment/01-list.php');