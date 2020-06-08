<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = (string) $_POST['string'];
    $str = (string) $_POST['str'];
}
$count =0 ;
if (strlen($string) === 0 || strlen($str) === 0) {
    echo "Bạn chưa nhập vào ";
}else {
    for ($i =0 ;$i <strlen($string);$i++) {
        if ($string[$i] === $str) {
           $count++;
        }
    }
    echo $count."lần";
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
    <form action="countstr.php" method="post">
        <label for="string">Nhập một chuỗi.</label>
        <input type="text" id="string" name="string"> <br>
        <label for="str">Nhập phần tử muốn đếm.</label>
        <input type="text" id="str" name="str"> <br>
        <input type="submit">
    </form>
</body>

</html>