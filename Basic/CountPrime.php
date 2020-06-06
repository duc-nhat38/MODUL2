<?php
$number =(int) $_POST['number'];
$count = 0;

$num = 2;
while ($count < $number) {
    $check = true;
    
    for ($i = 2; $i < $num;$i++) {
        if ($num % $i === 0){
            $check = false;
        break;
        }
    }
    if ($check){
        echo $num . "<br>";
        $count++;
    }
    $num ++;
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
    <form action="CountPrime.php" method="post">
        <label for="number">Số lượng số nguyên tố muốn in ra</label> <br>
        <input type="number" id="number" name="number"> <br>
        
        <input type="submit" name="submit">

    </form>
</body>
</html>