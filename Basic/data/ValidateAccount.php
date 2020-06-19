<?php
 $patent = '/^[_a-z0-9]{6,}$/';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
     $input = $_POST['name'];
     if(empty($input)){
         $result = 'Tên đăng nhâp không được bỏ trống!';
     }
     elseif(!preg_match($patent, $input)){
        $result = 'Không đươc nhập các kí tự đặc biệt và tên lớn hơn 6 kí tự!';
     }else{
         $total = "Tên đăng nhập hợp lệ : $input";
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate account</title>
    <style>
        .label {
        color: red;
        font-size: 15px;
    }
    </style>
</head>
<body>
    <form action="ValidateAccount.php" method="post">
        <p><?= $total?? '' ?></p>
        Name :<input type="text" name="name" id="">
        <label for="" class="label"> <?= $result?? '' ?> </label><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>