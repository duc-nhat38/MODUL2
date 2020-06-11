<?php
session_start();

function maxArray($arr)
{
    if (!empty($arr)){
        $max = $arr[0][0];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($max < $arr[$i][$j]) {
                    $max = $arr[$i][$j];
                }
            }
        }
        return "Gia trị lớn nhất là : " . $max;
    }else {
        return 'Hãy nhập đầy đủ.';
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
        echo maxArray($array);
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
    <form action="max.php" method="post">
        <label for="input">Nhập số :</label>
        <input type="text" id="input" name="input"> <br>
        <input type="submit" value="add" name="submit">
        <input type="submit" value="out" name="submit">

    </form>
</body>

</html>