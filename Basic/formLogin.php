<?php
 if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
 }
 $arr = [];
 array_push($arr, $name, $email, $phone);

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name"></label>
    <input type="text" id="name" name="name"><br>
    <label for="email"></label>
    <input type="email" id="email" name="email"><br>
    <label for="phone"></label>
    <input type="number" id="phone" name="phone"><br>
    <input type="submit">
</form>
</body>
</html>