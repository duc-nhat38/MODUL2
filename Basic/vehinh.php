<?php
$select = $_POST['select'];
$exit = $_POST['submit'];
if ($select === 'rectangle') {
    for ($i = 0; $i < 3;$i++){
         for ($j = 0; $j < 7;$j++) {
             echo '*';
         }
         echo '<br>';
    }
}
if ($select === 'sqtriangle') {
    for ($i = 0; $i < 5;$i++) {
        for ($j = 0; $j <= $i;$j++) {
            echo '*';
        }
        echo '<br>';
    }
}
if ($select === 'triangle') {
    for ($i = 0; $i < 5;$i++) {
        for ($k =$i ;$k < 4;$k++){
             echo '&nbsp;';
        }
        for ($j = 0; $j <= $i;$j++) {
            echo '*';
        }
        echo '<br>';
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
    <form action="vehinh.php" method="post">
        <select name="select" id="">
            <option value="rectangle">rectangle</option>
            <option value="sqtriangle">square triangle</option>
            <option value="triangle">triangle</option>
        </select>
        <input type="submit" name="submit" value="Exit">
    </form>
</body>

</html>

