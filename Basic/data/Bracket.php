<?php
function checkBracket($str)
{
    $stack = new SplStack();
    for($i = 0; $i < strlen($str);$i++){
        if ($str[$i] === '('){
            $stack->push($str[$i]);
        }
        if ($str[$i] === ')'){
            if ($stack->isEmpty()){
                return false;
            }else{
                $stack->pop();
            }
        }
    }
    if ($stack->isEmpty()){
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'];
    if(checkBracket($input)){
        echo 'Đúng';
    }else{
        echo 'Sai';
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
        <input type="submit">
    </form>
    
</body>

</html>