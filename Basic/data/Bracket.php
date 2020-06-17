<?php
function checkBracket($arr)
{
    $stack = new SplStack();
    foreach($arr as $value){
        if ($stack->isEmpty() && $value === ')') {
            return 'Sai';
        }
        $stack->push($value);
    }
    for ($i = 0; $i < count($arr)){
        $stack->pop();
    }
}
if ($_SERVER['REQUEST_METHOD'] === ' POST') {
    $input = explode('', $_POST['input']);
    if(checkBracket($input)) {
        echo 'đúng';
    }else{
        echo 'ko';
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
    <form action="Bracket.php" method="post">
        <label for="input">Nhập : </label>
        <input type="text" id="input" name="input">
        <input type="submit" value="submit">
    </form>
</body>

</html>