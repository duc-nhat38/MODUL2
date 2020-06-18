<?php

function insertionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $value  = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] < $value) {
            $list[$j+1] = $list[$j];
            $j--;
        }
        $list[$j+1] = $value;
    }
    return $list;
}
$list = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
print_r(insertionSort($list));