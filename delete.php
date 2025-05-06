<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM inventory WHERE id=$id");
header("Location: view_all_details.php");
?>
