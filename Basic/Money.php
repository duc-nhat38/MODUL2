<?php
$input = (int) $_POST['money'];
define('RATE', 23000);
$currency = $_POST['currency'];
$result;
switch ($currency) {
    case 'VND':
        $result = $input * RATE;
        break;
    case 'USA':
        $result = $input / RATE;
    break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi tiền tệ</title>
    <style>
        form {
            width: 300px; height: 400px;
            margin: auto;
            padding: 30px;
            border: 1px solid black;
            background-color: burlywood;
        }
        input , button {
            width: 200px; height: 50px;
        }
    </style>
</head>

<body>
    <form action="Money.php" method="post">
        <table>
            <caption>
                <h2>Chuyển đổi tiền tệ</h2>
            </caption>
            <tr>
                <td>
                    <p>Nhập tiền :</p>
                </td>
                <td>
                    <label for="money"></label>
                    <input type="number" id="money" name="money" min='0'>
                </td>
            </tr>
            <tr>
                <td>Loại tiền muốn đổi :</td>
                <td>
                    <select name="currency">
                        <option value="VND">VND</option>
                        <option value="USA">USA</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Số tiền đổi ra :</p>
                </td>
                <td><button><?= $result ?></button></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" id="submit" name="Đổi">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>