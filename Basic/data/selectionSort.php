<?php
function selectionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $min = $i;
        $tmp = 0;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$min] > $list[$j]) {
                $min = $j;
            }
        }
        if ($min !== $i) {
            $tmp = $list[$i];
            $list[$i] = $list[$min];
            $list[$min]=$tmp;
        }
    }
    return $list;
}
$list = [9, 2, 56, 10, 2, 35, 7];
print_r(selectionSort($list));
