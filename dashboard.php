<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>

    <div class="title">
        <h1>STUDENT DASHBOARD</h1>
    </div>

    <?php
    $conn = new mysqli("localhost", "root", "", "bangcoyo");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $total = $conn->query("SELECT COUNT(*) AS total FROM inventory")->fetch_assoc()['total'];
    $male = $conn->query("SELECT COUNT(*) AS male FROM inventory WHERE gender = 'male'")->fetch_assoc()['male'];
    $female = $conn->query("SELECT COUNT(*) AS female FROM inventory WHERE gender = 'female'")->fetch_assoc()['female'];
    ?>

    <div class="dashboard_info">
        <div class="box1">
            <h2 class="h22">Total Students</h2>
            <p class="pp"><?= htmlspecialchars($total) ?></p>
        </div>
        <br>
        <div class="box2">
            <h2 class="h22">Male Students</h2>
            <p class="pp"><?= htmlspecialchars($male) ?></p>
        </div>
        <br>
        <div class="box3">
            <h2 class="h22">Female Students</h2>
            <p class="pp"><?= htmlspecialchars($female) ?></p>
        </div>
    </div>

    <div class="back10">
        <button class="backers10" onclick="window.location.href='view_all_details.php'">Back</button>
    </div>
    
</body>
</html>
