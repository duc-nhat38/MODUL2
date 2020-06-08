<?php
$result1;
$result2;

function getMatrix($arr) {
    global $result1 ,$result2; 
    $len = count($arr);
   for ($i = 0; $i < count($arr);$i++){
    $result1 += $arr[$i][$i];
    $result2 += $arr[$i][$len-1];
    $len--;
   }
   return ($result1 + $result2);
}
$arr = array(
    [1,2,3],
    [4,5,6],
    [7,8,9]
);
echo getMatrix($arr);
?>