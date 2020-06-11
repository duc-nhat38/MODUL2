<?php
session_start();
function sumCold($array, $cold)
{
    if (!empty($array) && !empty($array)) {
        $result = 0;
        foreach ($array as $value) {
            if ($cold>0 && $cold < (count($array)+1)){
                $result += $value[$cold - 1];
            }else {
                return 'Số cột bé hơn 0 hoặc vượt quá số cột của mảng.';
            }
            
        }
        return $result;
    }else {
        return 'Hãy nhập đây đủ';
    }
}

if (isset($_SESSION['array'])) {
    $array = $_SESSION['array'];
} else {
    $array = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['submit'] === 'add') {
        $input = explode(',', $_POST['input']);
        $numbers = [];
        foreach ($input as $value) {
            if (filter_var($value,FILTER_VALIDATE_FLOAT)) {
                array_push($numbers, (float) $value);
            }           
        }
        array_push($array, $numbers);
        $_SESSION['array'] = $array;
    }
    if ($_POST['submit'] === 'out') {
        $cold = (int) $_POST['cold'];
        echo sumCold($array, $cold);
        unset($_SESSION['array']);
    }
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
    <form action="sumCold.php" method="post">
        <label for="input">Nhập số :</label>
        <input type="text" id="input" name="input"> <br>

        <label for="cold">Nhập số cột cần tính :</label>
        <input type="number" id="cold" name="cold"> <br>

        <input type="submit" value="add" name="submit">
        <input type="submit" value="out" name="submit">

    </form>
</body>

</html>
