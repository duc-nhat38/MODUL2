<?php
$arr = [1,2,3,4,2,6,7,8,9,0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = (int) $_POST['number'];
    for ($i =0 ; $i < count($arr);$i++) {
        if ($arr[$i] === $num) {
            for ($i;$i < count($arr)-1; $i++){
                $arr[$i] = $arr[$i+1];
            }
        }
    }
}

var_dump($arr);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delArray.php" method="post">
        <label for="number">Nhập phần tử muốn xóa.</label>
        <input type="number" id="number" name="number"> <br>
        <input type="submit">
    </form>
</body>
</html>