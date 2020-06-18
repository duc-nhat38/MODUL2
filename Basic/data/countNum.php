<?php
$numbers = [];
for ($i = 0; $i < 50; $i++) {
    array_push($numbers, rand(1,100));
}

function countNum($arr, $num){
     $count = 0;
     foreach($arr as $val){
         if ($num === $val){
             $count++;
         }
     }
     return $count;
}

echo countNum($numbers, 10);