<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inventory Management</title>
</head>
<body>
    <div class="title">
    <h1>Inventory Management</h1>
    </div>

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

    <div class="updaters">
        <form method="post">
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
            <input type="text" name="item_name" value="<?= $item['item_name'] ?>" required>
            <input type="text" name="quantity" value="<?= $item['quantity'] ?>" required>
            <input type="text" name="price" value="<?= $item['price'] ?>" required>
            <button type="submit" name="update">Update</button>
        </form>
    </div>

</body>
</html>
