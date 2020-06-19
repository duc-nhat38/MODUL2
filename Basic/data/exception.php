<?php
class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "Can't divide by zero";
    }
}

function divide($number1, $number2)
{
    if ($number2 === 0) {
        throw new DivideByZeroException();
    }else{
        $result = $number1/$number2;
        
    }
    return $result;
}
 try{
     
     var_dump(divide(2, 0));
 }catch(DivideByZeroException $e){
     echo $e;
 }