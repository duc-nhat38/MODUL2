<?php
$arr = [];
$b = 2;
for ($i = 0; $i <= $b; $i++) {
    array_push($arr, rand());
}
function findNum($arr, $num)
{
    $str = 'Không có';
    for ($j = 0; $j < count($arr); $j++) {
        for ($k = 0; $k < count($arr); $k++) {
            if ($k === $j) {
                continue;
            } else {
                if ((($arr[$j] - $arr[$k]) % $num) === 0) {
                    $str = $arr[$j] . "<br>" . $arr[$k];
                    break;
                }
            }
        }
    }
    return $str;
}
echo findNum($arr, $b);