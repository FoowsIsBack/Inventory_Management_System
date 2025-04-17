<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">
    <h1>Inventory Management</h1>
    </div>

    <form action="add.php" method="post">
        <input type="text" name="item_name" placeholder="Item Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <button type="submit">Add Item</button>
    </form>

    <div class="info">
    <table>
    <tr>
        <th>ID</th>
        <th>Item</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM inventory");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['item_name'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['price'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this item?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>
