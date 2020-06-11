<?php
session_start();

function sumMatrix($arr)
{
    if (!empty($arr)) {
        $result1 = 0;
        $result2 = 0;
        $len = count($arr);
        for ($i = 0; $i < count($arr); $i++) {
            $result1 += $arr[$i][$i];
            $result2 += $arr[$i][$len - 1];
            $len--;
        }
        return "Giá trị của 2 đường  chéo là : " . ($result1 + $result2);
    } else {
        return 'Hãy nhập dầy đủ.';
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
        echo sumMatrix($array);
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
    <form action="MaTran.php" method="post">
        <label for="input">Nhập số :</label>
        <input type="text" id="input" name="input"> <br>
        <input type="submit" value="add" name="submit">
        <input type="submit" value="out" name="submit">

    </form>
</body>

</html>