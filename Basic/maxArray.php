<?php


$a = 7;
$ar = [];
while($a > 0){
    $b = $a % 2;
    array_push($ar, $b);
    $a = floor($a/2);
}
print_r($ar);