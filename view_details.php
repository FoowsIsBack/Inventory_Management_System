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
        <h1>STUDENT SETTINGS</h1>
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
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $result = $conn->query("SELECT * FROM inventory WHERE id = $id");
            } else {
                $result = $conn->query("SELECT * FROM inventory");
            }

            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= ucwords(htmlspecialchars($row['user_info'])) ?></td>
                <td>
                    <img src="uploads/<?= htmlspecialchars($row['profile_pic']) ?>" class="pic">
                </td>
                <td><?= (int)$row['age'] ?></td>
                <td><?= ucwords(htmlspecialchars($row['gender'])) ?></td>
                <td><?= ucwords(htmlspecialchars($row['item_name'])) ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>₱ <?= htmlspecialchars($row['price']) ?></td>
                <td>
                    <a class="setting" href="update.php?id=<?= $row['id'] ?>">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="back">
        <button class="backers" onclick="window.location.href='list.php'">Back</button>
    </div>

</body>
</html>
