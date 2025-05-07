<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
    <title>Student Update</title>
</head>
<body>
    <div class="title">
    <h1>STUDENT UPDATE</h1>
    </div>

<?php
include 'db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $info = ucwords($_POST['user_info']);
    $age = $_POST['age'];
    $gender = ucwords($_POST['gender']);
    $name = ucwords($_POST['item_name']);
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $conn->query("UPDATE inventory SET user_info='$info', age='$age', gender='$gender', item_name='$name', quantity='$qty', price='$price' WHERE id=$id");
    header("Location: main.php");
    exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM inventory WHERE id=$id");
$item = $result->fetch_assoc();
?>

    <div class="ui">
        <div class="main">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">

                <h2>NAME:</h2>
                <input type="text" name="user_info" value="<?= $item['user_info'] ?>" required>

                <h2>AGE</h2>
                <input type="text" name="age" value="<?= $item['age'] ?>" required>

                <h2>GENDER:</h2>
                <input type="radio" name="gender" id="male" value="male" <?= ($item['gender'] == 'male') ? 'checked' : ''; ?> required>
                <label for="male">Male</label>
                <br>
                <input type="radio" name="gender" id="female" value="female" <?= ($item['gender'] == 'female') ? 'checked' : ''; ?> required>
                <label for="female">Female</label>

                <h2>ITEM:</h2>
                <input type="text" name="item_name" value="<?= $item['item_name'] ?>" required>
                
                <h2>QUANTITY:</h2>
                <input type="text" name="quantity" value="<?= $item['quantity'] ?>" required>

                <h2>PRICE:</h2>
                <input type="text" name="price" value="<?= $item['price'] ?>" required>

                <div class="clickers">
                    <button class="tolist" type="submit" name="update">Update</button>
                    <button class="tolist" type="button" id="back" onclick="window.location.href='list.php'">Back</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
