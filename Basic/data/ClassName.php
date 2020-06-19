<?php
$patent = '/^(A|C|P{1})([0-9]{4})(G|H|I|K|L|M{1})$/';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input = $_POST['name'];
    if(preg_match($patent, $input)){
        $result = 'Tên lớp hợp lệ!';
    }else{
        $result = 'Tên lớp không hợp lệ!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Name</title>
</head>

<body>
    <form action="ClassName.php" method="post">
        Class Name <input type="text" name="name" id=""><br>
        <label for=""><?= $result?? ''?> </label><br>
        <input type="submit">
    </form>
</body>

</html>