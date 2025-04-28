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
    
    <div class="info">
        <table>
            <tr class="classTH">
                <th>ID</th>
                <th>NAME</th>
                <th>PICTURE</th>
                <th>GENDER</th>
                <th>ITEM</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>SETTINGS</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM inventory");
            while ($row = $result->fetch_assoc()):
            ?>
            
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= ucwords($row['user_info']) ?></td>
                <td>
                    <img src="uploads/<?= htmlspecialchars($row['profile_pic']) ?>" class="pic">
                </td>
                <td><?= ucwords($row['gender']) ?></td>
                <td><?= ucwords($row['item_name']) ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>₱ <?= $row['price'] ?></td>
                <td>
                    <a class="setting" href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="setting" id="del" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this item?')">Delete</a>
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
