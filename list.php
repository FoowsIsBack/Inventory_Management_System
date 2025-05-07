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
                <th>FULL NAME</th>
                <th>AGE</th>
                <th>SETTINGS</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM inventory");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= ucwords(htmlspecialchars($row['user_info'])) ?></td>
                <td><?= (int)$row['age'] ?></td>
                <td>
                    <a class="setting" href="view_details.php?id=<?= $row['id'] ?>">View Details</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="back">
        <button class="backers" onclick="window.location.href='main.php'">Back</button>
        <button class="backers1" onclick="window.location.href='view_all_details.php'">All Details</button>
    </div>

</body>
</html>
