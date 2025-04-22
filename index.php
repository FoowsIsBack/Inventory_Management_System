<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
</head>
<body>
    <div class="title">
        <h1>INVENTORY MANAGEMENT</h1>
    </div>

    <form action="add.php" method="post">
        <input type="text" name="item_name" placeholder="Item Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <input type="number" name="price" placeholder="Price" required>
        <button type="submit">Add Item</button>
        <button class="tolist" type="button" onclick="window.location.href='list.php'">Item List</button>
    </form>

    <?php include 'inventory_table.php'; ?>

</body>
</html>
