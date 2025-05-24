<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
</head>
<body>

    <div class="title">
        <h1>STUDENT DETAILS</h1>
    </div>
    
    <div class="info">
        <table>
            <tr class="classTH">
                <th>ID</th>
                <th>FULL NAME</th>   
                <th>PICTURE</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>ITEM</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>SETTINGS</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM inventory ORDER BY id DESC");
            while ($row = $result->fetch_assoc()):
            ?>
            
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= ucwords($row['user_info']) ?></td>
                <td><img src="uploads/<?= htmlspecialchars($row['profile_pic']) ?>" class="pic"></td>
                <td><?= (int)$row['age'] ?></td>
                <td><?= ucwords($row['gender']) ?></td>
                <td><?= ucwords($row['item_name']) ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>₱ <?= number_format($row['price'], 2) ?></td>
                <td>
                    <a class="setting" href="update.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a class="setting" id="del" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="back1">
        <button class="backers" onclick="window.location.href='list.php'">Back</button>
        <button class="dashboard" onclick="window.location.href='dashboard.php'">Dashboard</button>
    </div>

</body>
</html>
