<?php

include("../OOP/StopWatch.php");

class Stack
{
    public $stack;
    public $limit;

    public function __construct(int $limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (count($this->stack) <= $this->limit){
            array_unshift($this->stack, $data);
        }else {
            echo 'Độ dài của mảng đã đầy';
        }
    }
    public function pop()
    {
        if (!$this->isEmpty()){
            return array_shift($this->stack);
        }else {
            echo 'Mảng rỗng.';
        }
        
    }
    public function top()
    {
        current($this->stack );
    }
    public function isEmpty(){
        if (count($this->stack) === 0) {
            return true;
        }else{
            return false;
        }
    }
}
// $stack =new Stack(100000);
// $watch =new StopWatch();
// $watch->start();
// for ($i = 0;$i < 10000; $i++){
    
//     $stack->push(rand(1, 10));
// }
// $watch->stop();
// echo $watch->getElapsedTime()."<br>";
// $watch->start();
// for ($i = 0;$i < 10000; $i++){
//      $stack->pop();
// }
// $watch->stop();
// echo $watch->getElapsedTime()."<br>";