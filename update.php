<?php
include 'db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['item_name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $conn->query("UPDATE inventory SET item_name='$name', quantity='$qty', price='$price' WHERE id=$id");
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM inventory WHERE id=$id");
$item = $result->fetch_assoc();
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
    <input type="text" name="item_name" value="<?= $item['item_name'] ?>" required>
    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" required>
    <input type="number" step="0.01" name="price" value="<?= $item['price'] ?>" required>
    <button type="submit" name="update">Update</button>
</form>
