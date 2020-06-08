<?php
$array1 = [];
$array2 = [];
for ($i = 0;$i <10;$i++){
    $num = rand(1, 100);
    array_push($array1, $num);
    array_push($array2, ($num + 1));
}
$array3 = array_merge($array1, $array2);
print_r($array1);
echo "<br>";
print_r($array2);
echo "<br>";
print_r($array3);
?>