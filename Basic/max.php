<?php
function maxArray($arr)
{
    $max = $arr[0][0];
    // foreach ($arr as $i => $value) {       
    //     foreach ($arr[$i] as $j => $val) {
    //         if ($max < $arr[$i][$j]) {
    //             $max = $val;
    //         }
    //     }
    // }

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }

    return $max;
}
$numbers = array(
    array(1,2,3,4),
    array(6, 7, 8),
    array(5,4,3)
);
echo maxArray($numbers);
