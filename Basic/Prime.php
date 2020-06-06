<?php
echo('2'."<br>");
for ($i =3; $i < 100; $i++) {
    $check = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j === 0) {
            $check = false;
        break;
        }
    }
    if ($check) {
        echo $i . "<br>";
    }
}
?>


