<?php
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $num = rand(1, 100);
    array_push($arr, $num);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = (int) $_POST['index'];
}
if ($index < 0 || $index > 99) {
    throw new Exception('chỉ số vượt qua giới hạn.');
}
try {
    foreach ($arr as $key => $value) {
        if ($key === $index) {
            echo $value;
        }
    }
}catch (Exception $e) {
    echo $e -> getMessage();
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
    <form action="try_catch.php" method="post">
        <label for="number">Nhập chỉ số bạn muốn lấy .</label>
        <input type="text" id="number" name="index"> <br>
        <input type="submit">
    </form>
</body>

</html>