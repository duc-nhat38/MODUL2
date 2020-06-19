<?php

function merge_sort(&$array)
{
    if (count($array) === 1) {
        return $array;
    }

    $middle = (int) count($array) / 2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}
function merge($left, $right)
{
    $result = [];

    while (count($left) > 0 && count($right) > 0) {

        if ($left[0] > $right[0]) {
            $result[] = array_shift($right);
        } else {
            $result[] = array_shift($left);
        }
    }
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

$array  = [1,2,3,45,6,3,23,77,2];
print_r( merge_sort($array));
