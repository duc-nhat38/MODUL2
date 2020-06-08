
<?php
session_start();
function checkMin($arr)
{
    if (count($arr) === 0) {
        return "Không có giá trị nhập vào";
    }
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}
if (isset($_SESSION['myArray'])) {
 $numbers = $_SESSION['myArray'];
}else {
    $numbers = [];
}

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $num =   $_POST['number'];
    if ($_POST['submit'] === "add") {   
      array_push($numbers, $num);
      $_SESSION['myArray'] = $numbers;

    }
 
    
    if ($_POST['submit'] === "out") {        
         echo "Số bé nhất là : ".checkMin($numbers);
         unset($_SESSION['myArray']);
        
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