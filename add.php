<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$info = ucwords($_POST['user_info']);
$gender = ucwords($_POST['gender']);
$name = ucwords($_POST['item_name']);
$qty = $_POST['quantity'];
$price = $_POST['price'];

$conn->query("INSERT INTO inventory (user_info, gender, item_name, quantity, price) VALUES ('$info', '$gender', '$name', '$qty', '$price')");

header("Location: index.php");
?>
