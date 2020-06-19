<?php
$patent = '/^\([0-9]{2}\)\-\(0[0-9]{9}\)$/';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input = $_POST['name'];
    if(empty($input)){
        $result = 'Số điện thoại không được bỏ trống!';
    }
    elseif(!preg_match($patent, $input)){
       $result = 'Số điện thoại không hợp lệ!';
    }else{
        $total = "Số điện thoại hợp lệ : $input";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telephone Number</title>
    <style>
        .label {
        color: red;
        font-size: 15px;
    }
    </style>
</head>
<body>
    <form action="TelephoneNumber.php" method="post">
        <p><?= $total?? '' ?></p>
        Telephone Number :<input type="text" name="name" id="">
        <label for="" class="label"> <?= $result?? '' ?> </label><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>