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
                    <h2>NAME:</h2>
                    <input type="text" name="user_info" placeholder="Ex. Dave" required>

                    <h2>ITEM:</h2>
                    <input type="text" name="item_name" placeholder="Ex. Paper" required>

                    <h2>QUANTITY:</h2>  
                    <input type="number" name="quantity" placeholder="Ex. 1 or more" required>

                    <h2>PRICE:</h2>
                    <input type="number" name="price" placeholder="Ex. 150" required>

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
