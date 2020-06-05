<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read the number</title>
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
        <h2>Read The Number</h2>
        <label for="in">Nhập từ cần đọc.</label>
        <input type="text" id="in" name="input" placeholder="Nhập tại đây...">
        <input type="submit" value="submit" id="submit">
    </form>
    <?php
    $input = (int) $_REQUEST['get'];
    $arr = [
        'zero','one','two','three','four','five','six','seven','eight','nine','ten',
        'eleven','twelve','thirteen','fourteen','fifteen',
    ];
    if (strlen($input) > 0) {
        if ($input >= 0 && $input <= 15) {
            foreach ($arr as $key => $value){
                if ($key === $input) {
                    echo $value;
                }
            }
            } elseif ($input>15 && $input < 20) {
                 $str = explode("", $input);
                 switch ($str[2]) {
                     case 6 :
                        echo "sixteen";
                     break;
                     case 7 :
                        echo "seventeen";
                     break;
                     case 8 :
                        echo "eighteen";
                     break;
                     case 9 :
                        echo "nineteen";
                     break;
                 }
            } elseif ($input>=20 && $input < 100){
                
            }
        }
        
        
    ?>
</body>

</html>