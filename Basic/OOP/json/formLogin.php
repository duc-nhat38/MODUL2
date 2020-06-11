<?php

function  saveDataJSON($name, $email, $phone)
{

    $array = [];
    if (!empty($name)) {
        $array['name'] = $name;
    } else {
        return 'vui lòng nhập đầy đủ thông tin';
    }
    if (!empty($email)) {
        $array['email'] = $email;
    } else {
        return 'vui lòng nhập đầy đủ thông tin';
    }
    if (!empty($phone)) {
        $array['phone'] = $phone;
    } else {
        return 'vui lòng nhập đầy đủ thông tin';
    }
    $jsonData = file_get_contents('users.json');
    $data = json_decode($jsonData, true);
    array_push($data, $array);
    $json_Data = json_encode($data, JSON_UNESCAPED_UNICODE);
    file_put_contents('users.json', $json_Data);
    return 'Đã nhập thành công.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['phone'];
    echo saveDataJSON($name, $email, $phone);
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