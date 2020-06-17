<?php
include("stack.php");
include("Queue.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $string = $_POST['input'];
    $stack = new Stack(strlen($string));
    $queue = new Queue();
    for ($i = 0; $i < strlen($string); $i++) {
        $stack->push($string[$i]);
        $queue->enqueue($string[$i]);
    }
    $check = true;
    for ($j = 0; $j < strlen($string); $j++) {
        if ($stack->pop() !== $queue->dequeue()) {
            $check = false;
        }
    }
    if($check === false){
        echo 'Không đối xứng.';
    }else {
        echo 'Đối xứng.';
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
    <form action="symmetry.php" method="post">
        <label for="string"></label>
        <input type="text" id="string" name="input"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>