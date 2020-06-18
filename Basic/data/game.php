<?php
session_start();
    
if(isset($_SESSION['low']) || isset($_SESSION['high']) || isset($_SESSION['guess'])) {
    $low = $_SESSION['low'];
    $high =  $_SESSION['high'];
    $guess = $_SESSION['guess'] ;
}else {
    session_unset();
    $low =1;
    $high=100;
    $guess = rand($low,$high);
    $result = $guess;
    $_SESSION['guess'] = $guess; 

}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['select'])){
        $select = $_POST['select'];
        switch($select){
            case '1':
                $result = $guess. ' BIngo';
            break;
            case '2':
                $low =$guess;
                $_SESSION['low'] = $low+1;
                $_SESSION['high'] = $high;

                $guess = rand($low+1,$high);
                $_SESSION['guess'] = $guess; 
                $result = 'so doan '.$guess;
            break;
            case '3':
                $high = $guess;
                $_SESSION['low'] = $low;
                $_SESSION['high'] = $high-1;
                $guess = rand($low,$high-1);
                $_SESSION['guess'] = $guess; 
                $result = 'so doan '.$guess;
            break;
        }
    }
    
}
// session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="game.php" method="post">
        <label for="select">Gợi ý</label>
        <select name="select">
            <option value="1">Bằng</option>
            <option value="2">Bé</option>
            <option value="3">Lớn</option>
        </select>
        <input type="submit" >
    </form>
    <?= $result?>
</body>

</html>