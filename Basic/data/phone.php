<?php

function checkNum($arr, $num)
{
    $check  = false;
    foreach ($arr as $value) {
        if ($value == $num) {
            $check = true;
            break;
        }
    }
    return $check;
}
$viettelNum = [86, 96, 97, 98, 32, 33, 34, 35, 36, 37, 38, 39];
$vinaNum = [88, 91, 94, 83, 84, 85, 81, 82];
$mobiNum = [70, 76, 77, 78, 79, 89, 90, 93,];

$telephoneNumber = [
    "viettel" => [],
    "vina" => [],
    "mobi" => [],
    "undefined" => [],
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = explode(',', $_POST['input']);
    if (!empty($input)) {

        foreach ($input as $val) {
            if (filter_var(substr($val, 1), FILTER_VALIDATE_INT) && strlen($val) === 10) {
                if ($val[0] == 0) {
                    $firstNum = substr($val, 1, 2);
                    if (checkNum($viettelNum, $firstNum)) {
                        array_push($telephoneNumber['viettel'], $val);
                    } elseif (checkNum($vinaNum, $firstNum)) {
                        array_push($telephoneNumber['vina'], $val);
                    } elseif (checkNum($mobiNum, $firstNum)) {
                        array_push($telephoneNumber['mobi'], $val);
                    } else {
                        array_push($telephoneNumber['undefined'], $val);
                    }
                } else {
                    array_push($telephoneNumber['undefined'], $val);
                }
            } else {
                array_push($telephoneNumber['undefined'], $val);
            }
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #container {
            display: flex;
            width: 60%;
            border: 1px solid;
            border-collapse: collapse;
        }

        .small {
            flex: 1;
            border: 1px solid;
        }

        h3 , p {
            text-align: center;

        }
    </style>

</head>

<body>
    <form action="phone.php" method="post">
        <label for="input">Nhập số điện thoai :</label>
        <textarea name="input" id="input" cols="50" rows="10" placeholder="Ví dụ : 0982763627, 097352673, ...."></textarea><br>
        <input type="submit">
    </form>

    <?php if (!empty($telephoneNumber)) : ?>
        <div id="container">
            <?php foreach ($telephoneNumber as $key => $value) : ?>
                <div class="small">
                    <h3>
                        <?= $key ?>
                    </h3>
                    <p>
                        <?php foreach ($value as  $item) : ?>
                            <?= $item ?>
                            <br>
                        <?php endforeach; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>

</html>