<?php
$fistNum = (float) $_POST['fistNum'];
$secondNum = (float) $_POST['secondNum'];
$operator =  $_POST['operator'];
$result;
$sum;
function calculator($num1, $num2)
{
    global $result, $operator, $sum;
    if ($operator === 'Add') {
        $sum = $num1 + $num2;
        $result = ($num1 . ' ' . '+' . ' ' . $num2 . ' ' . '=' . ' ' . $sum);
        return $result;
    }
    if ($operator === 'Sub') {
        $sum = $num1 - $num2;
        $result = ($num1 . ' ' . '-' . ' ' . $num2 . ' ' . '=' . ' ' . $sum);
        return $result;
    }
    if ($operator === 'Multi') {
        $sum = $num1 * $num2;
        $result = ($num1 . ' ' . 'x' . ' ' . $num2 . ' ' . '=' . ' ' . $sum);
        return $result;
    }
    if ($num2 <=  0) {
        throw new Exception('Chia cho số 0 hoặc bé hơn không.');
    } elseif ($operator === 'Div') {
        $sum = $num1 / $num2;
        $result = ($num1 . ' ' . ':' . ' ' . $num2 . ' ' . '=' . ' ' . $sum);
        return $result;
    }
}
try {
    calculator($fistNum, $secondNum);
} catch (Exception $e) {
    echo "<p>Ngoại lệ: " . $e->getMessage() . "</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 1px solid black;
            width: 300px; height: 300px;
            margin: auto;
            padding: 50px;
        }
    </style>
</head>

<body>
    <form action="Simple.php" method="post">
        <table>
            <caption><h1>Calculator</h1></caption>
            <tr>
                <td>
                    <p>First operand</p> </td> <td>
                            <label for="fistNum"></label>
                                <input type="number" id="fistNum" name="fistNum">
                </td>
            </tr>
            <tr>
                <td>Operator</td>
                <td>
                    <select name="operator">
                        <option value="Add">Addition</option>
                        <option value="Sub">Subtraction</option>
                        <option value="Multi">Multiplication</option>
                        <option value="Div">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Second operand</p>
                </td>
                <td>
                    <label for="secondNum"></label>
                    <input type="number" id="secondNum" name="secondNum">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button><?= $result ?></button></td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" id="calculate" name="Calculate">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>