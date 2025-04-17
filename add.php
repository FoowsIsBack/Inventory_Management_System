<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$name = $_POST['item_name'];
$qty = $_POST['quantity'];
$price = $_POST['price'];

$conn->query("INSERT INTO inventory (item_name, quantity, price) VALUES ('$name', '$qty', '$price')");

header("Location: main.php");
?>
