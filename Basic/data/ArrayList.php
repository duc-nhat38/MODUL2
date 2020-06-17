<?php

class ArrayList {
    public $arrayList = [] ;
  
    public function add($obj){
         array_push($this->arrayList, $obj);
    }
    public function get($index){
        if(isset($this->arrayList[$index])){
            return $this->arrayList[$index];
        }else {
            return 'Phần tử không tồn tại .';
        }
   }
   public function remove($index){
    if(isset($this->arrayList[$index])){
        array_splice($this->arrayList, $index, 1);
    }else {
        die ('Phần tử không tồn tại trong mảng.');
    }
}
}

$list = new ArrayList();

$list->add(1);
$list->add(2);
$list->add(3);
echo $list->get(1);
$list->remove(2);
var_dump($list);