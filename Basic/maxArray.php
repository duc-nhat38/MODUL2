<?php
function maxArray($arr){
    $max = $arr[0][0];
    foreach ($arr as $i => $value) {
        
        foreach ($arr[$i] as $j => $val) {
            if ($max < $arr[$i][$j]) {
                $max = $val;
            }
        }
    }
    return $max;
}
$numbers = array(
    [1,2,3,4,5],
    [6,7,8,9,4]
);
echo maxArray($numbers);

?>