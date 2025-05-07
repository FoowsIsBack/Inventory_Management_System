<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $info = ucwords($_POST['user_info']);
    $age = $_POST['age'];
    $gender = ucwords($_POST['gender']);
    $name = ucwords($_POST['item_name']);
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $profile = '';

    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === 0) {
        $profile = time() . '_' . basename($_FILES['profile_pic']['name']);
        $upload_path = 'uploads/' . $profile;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_path)) {
            $conn->query("INSERT INTO inventory (user_info, profile_pic, age, gender, item_name, quantity, price) 
                          VALUES ('$info', '$profile', '$age', '$gender', '$name', '$qty', '$price')");
            header("Location: main.php");
            exit();
        } else {
            echo "Failed to upload image.";
        }
    }
}
?>
