<?php

$numbers = [];
for ($i = 0; $i < 20; $i++) {
    array_push($numbers, rand(1,100));
}
function searchMinNumber($arr)
{
    $min = $arr[0];
    foreach ($arr as $val) {
        if ($min > $val) {
            $min = $val;
        }
    }
    return $min;
}
function searchMaxNumber($arr)
{
    $max = $arr[0];
    foreach ($arr as $val) {
        if ($max < $val) {
            $max = $val;
        }
    }
    return $max;
}
echo "Giá trị nhỏ nhất = ".searchMinNumber($numbers)."<br>";
echo "Giá trị lớn nhất = ".searchMaxNumber($numbers);