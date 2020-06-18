<?php

function bubbleSort($list)
{
    $tmp = 0;
    for ($i = 0; $i < count($list) - 1; $i++) {
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$i] > $list[$j]) {
                $tmp = $list[$j];
                $list[$j] = $list[$i];
                $list[$i] = $tmp;
            }
        }
    }
    return $list;
}
$list = [9,2,56,10,2,35,7];
 print_r(bubbleSort($list));