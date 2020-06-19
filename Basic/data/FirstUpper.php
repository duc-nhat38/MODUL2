<?php
function isFirstLetterUpperCase($string){
  $parent = '/^[A-Z]/';

  if(preg_match($parent, $string)){
      echo "String's first character is uppercase";
  }else{
    echo "String's first character is not uppercase";
  }
}

$string = 'Đi học về.';
isFirstLetterUpperCase($string);
$string = 'đi học về';
isFirstLetterUpperCase($string);