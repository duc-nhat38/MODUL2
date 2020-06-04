<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
    <style>
        form {
            width: 600px;
            height: 400px;
            margin: 0 300px;
        }

        #in {
            width: 300px;
            height: 40px;
        }

        #submit {
            width: 60px;
            height: 45px;
        }
    </style>
</head>

<body>
    <form method="get">
        <h2>Từ Điển Anh-Việt</h2>
        <label for="in">Nhập từ cần tra cứu.</label>
        <input type="text" id="in" name="input" placeholder="Nhập từ tìm kiếm...">
        <input type="submit" value="submit" id="submit">
    </form>
    <?php
    $dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $searchWord = $_GET['input'];
        
        foreach ($dictionary as $key => $value) {
            $check = 0 ;
            if ($key === $searchWord) {
                echo ($value);
                $check = 1;
            break;
            }             
        }
        if ($check === 0) {
            echo('KHÔNG TÌM THẤY.');
        }
    }
    ?>
</body>

</html>