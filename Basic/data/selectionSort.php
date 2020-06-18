<?php
 function selectionSort($list){
     for($i = 0;$i<count($list);$i++){
         $value = $list[$i];
         $j = $i-1;
         while($j>=0 && $list[$j]>$value){
            $list[$j+1] = $list[$j];
            $j--;
         }
         $list[$j+1] = $value;
     }
     return $list;
 }

 $list = [9,2,56,10,2,35,7];
 print_r(selectionSort($list));