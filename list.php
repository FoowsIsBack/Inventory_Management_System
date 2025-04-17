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
        <h1>INVENTORY MANAGEMENT</h1>
    </div>
    
    <div class="info">
        <table>
            <tr>
                <th>ID</th>
                <th>ITEM</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>SETTINGS</th>
            </tr>
            <?php
            include 'db.php';
            $result = $conn->query("SELECT * FROM inventory");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['items_name'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>₱ <?= $row['price'] ?></td>
                <td>
                    <a class="setting" href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="setting" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this item?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="back">
        <button class="backers" onclick="window.location.href='index.php'">Back</button>
    </div>

</body>
</html>