<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
</head>

<body>
    <div class="title">
        <h1>INVENTORY MANAGEMENT SYSTEM</h1>
    </div>

    <div class="ui">
        <form action="add.php" method="post">
            <div class="main">
                <div class="info">
                    <label for="user">NAME:</label>
                    <input type="text" name="user_info" placeholder="Name" required>
                </div>

                <div class="itemName">
                    <label for="item_name">ITEM:</label>
                    <input type="text" name="item_name" placeholder="Item" required>
                </div>

                <div class="quantity">
                    <label for="">QUANTITY:</label>
                    <input type="number" name="quantity" placeholder="Quantity" required>
                </div>                                                       

                <div class="price">
                    <label for="">PRICE:</label>
                    <input type="number" name="price" placeholder="Price" required>
                </div>

                <div class="clickers">
                    <button type="submit">Add Item</button>
                    <button class="tolist" type="button" onclick="window.location.href='list.php'">Item List</button>
                </div>
            </div>
        </form>
    </div>

    <?php include 'inventory_table.php'; ?>

</body>
</html>
