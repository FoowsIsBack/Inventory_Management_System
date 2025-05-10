<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/icon.png" type="image/x-icon">
    <title>Inventory Management System</title>
</head>

<body>
    <div class="title">
        <h1>INVENTORY MANAGEMENT SYSTEM</h1>
    </div>

    <div class="ui">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="main">
                    <h2>FULL NAME:</h2>
                    <input type="text" name="user_info" placeholder="Ex. Dave Bangcoyo" required>

                    <h2>AGE</h2>
                    <input type="number" name="age" placeholder="Ex. 20" required>

                    <h2>GENDER:</h2>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <br>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>

                    <h2>ITEM:</h2>
                    <input type="text" name="item_name" placeholder="Ex. Paper" required>

                    <h2>QUANTITY:</h2>  
                    <input type="number" name="quantity" placeholder="Ex. 1 or more" required>

                    <h2>PRICE:</h2>
                    <input type="number" name="price" placeholder="Ex. 150" required>

                    <h2>PROFILE PIC:</h2>
                    <input type="file" name="profile_pic" id="file" accept="uploads/*" required>

                    <div class="clickers">
                        <button type="submit">Add Item</button>
                        <button class="tolist" type="button" onclick="window.location.href='list.php'">View Details</button>
                    </div>
                    <div class="dev">
                        <a class="setting" href="index.php">BACK?</a>
                    </div>
            </div>
        </form>
    </div>

</body>
</html>
