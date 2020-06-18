<?php
$numbers = [];
for ($i = 0; $i < 100; $i++) {
    array_push($numbers, rand(0, 10));
}
function countNum($arr, $num)
{
    $count = 0;
    foreach ($arr as $value) {
        if ($value === $num) {
            $count++;
        }
    }
    if ($count === 0 ) {
        echo "ko tồn tại $num ";
    } else {
        echo "xuất hiện $count lần";
    }
}
 countNum($numbers, 5);
