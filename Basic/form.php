<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
}
if (empty($name) && empty($phone) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Vui lòng nhập đủ thông tin.";
}
function saveDataJSON($filename, $name, $email, $phone) {
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name"></label>
        <input type="text" id="name" name="name"><br>
        <label for="email"></label>
        <input type="email" id="email" name="email"><br>
        <label for="phone"></label>
        <input type="number" id="phone" name="phone">
        
    </form>
</body>
</html>