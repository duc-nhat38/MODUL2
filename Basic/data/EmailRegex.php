<?php

function checkEmail($email){
    $parent = '/^[a-zA-Z0-9]+[a-zA-Z0-9]*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)$/';
    if(preg_match($parent, $email)){
        echo 'Đúng';
    }else{
        echo 'Sai';
    }
}
$email = 'phamdinhduc@2r45r.com';
checkEmail($email);
$email = 'phạmdinhduc@gmail.com';
checkEmail($email);