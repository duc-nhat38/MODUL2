
<?php
// Start the session
session_start();
?>
<?php
function checkMin($arr)
{
    if (count($arr) === 0) {
        return "Không có giá trị nhập vào";
    }
    for ($i = 1; $i < count($arr); $i++) {
        $min = $arr[0];
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

if ($_SERVER['REQUEST_METHOD']==='POST') {

    // $numbers = array();
    $_SESSION['arr'] =[];
    // $arr = [];
    $num = (int)  $_POST['number'];
    if ($_POST['submit'] === "add") {   
        $_SESSION['arr'][0] =$num;
        print_r($_SESSION);

    }
 
    
    if ($_POST['submit'] === "out") {        
        // echo checkMin($numbers);
        print_r($_SESSION['arr']);
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
    <form action="minNumber.php" method="post">
        <label for="number">Nhập số</label>
        <input type="number" id="number" name="number"><br>
        <input type="submit" name="submit" value="add">
        <input type="submit" name="submit" value="out">
    </form>
</body>

</html>