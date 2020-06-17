<?php

class Stack{

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

$intNumber = [1,2,3,4,5,6,7,8,9,10];
print_r($intNumber);
echo '<br>';
$revStack = new Stack(count($intNumber));
for($i = 0;$i < count($intNumber); $i++){
    $revStack->push($intNumber[$i]);
}
$arrayNew = [];
for($j = 0;$j < count($intNumber); $j++){  
    array_push($arrayNew,  $revStack->pop());   
}

print_r($arrayNew);