<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
    <title>Inventory Management System</title>
</head>
<body>
    <div class="title">
    <h1>INVENTORY MANAGEMENT SYSTEM</h1>
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

    <div class="ui">
        <div class="main">
            <form method="post">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">

                <div class="itemName">
                    <h2>ITEM:</h2>
                    <input type="text" name="item_name" value="<?= $item['item_name'] ?>" required>
                </div>
                
                <div class="quantity">
                    <h2>QUANTITY:</h2>
                    <input type="text" name="quantity" value="<?= $item['quantity'] ?>" required>
                </div>

                <div class="price">
                    <h2>PRICE:</h2>
                    <input type="text" name="price" value="<?= $item['price'] ?>" required>
                </div>
                <div class="clickers">
                    <button class="tolist" type="submit" name="update">Update</button>
                    <button class="tolist" type="button" id="back" onclick="window.location.href='list.php'">Back</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
