<?php
    $num1 = (int) $_POST['amount'];
    $num2 = (float) $_POST['rate'];
    $num3 = (int) $_POST['year'];
    $sum = $num1 * (1 + ($num2 / 100) / 12) ** ($num3 * 12);

    $sum1 = round($sum, 3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
        form {
            width: 500px;
            height: 500px;
            margin: auto;
            border: 1px solid black;
            text-align: center;
            align-items: center;
        }

        input {
            width: 400px;
            height: 50px;
            margin-top: 10px;
        }

        button {
            width: 410px;
            height: 50px;
           margin-top: -10px;
        }

        #div1 {
            width: 410px;
            height: 50px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <form action="Calculator.php" method="post">
        <h2>Future Value Calculator</h2>
        <div>
            <label for="amount">Số tiền ban đầu :</label><br>
            <input type="number" id="amount" name="amount" placeholder="Số tiền (triệu)...." min='0'>
        </div>
        <div>
            <label for="rate">Lãi suất 1 năm :</label><br>
            <input type="number" id="rate" name="rate" placeholder="Lãi suất (%)...." min='0'>
        </div>
        <div>
            <label for="year">Kỳ hạn :</label><br>
            <input type="number" id="year" name="year" placeholder="Thời hạn (năm)...." min='0'>
        </div>
        <p>Kết quả :</p>
        <button><?= $sum1 ?></button><br>
        <input type="submit" name="Tính" class="submit">
    </form>

</body>

</html>