<?php

class MyList
{
    public int $size;
    public $elements = [];

    public function add($obj)
    {

        array_push($this->elements, $obj);
    }
    public function insert($index, $obj)
    {
        for ($i = $index; $i < count($this->elements); $i++) {
            $this->elements[$i + 1] =  $this->elements[$i];
            $this->elements[$i] = $obj;
        }
    }
    public function  remove($index)
    {
        if (array_key_exists($index, $this->elements)) {
            array_splice($this->elements, $index, 1);
        } else {
            return 'Không tồn tại vị trí này.';
        }
    }
    public function get($index)
    {
        if (array_key_exists($index, $this->elements)) {
            return $this->elements[$index];
        } else {
            return 'Không tồn tại vị trí này.';
        }
    }
    public function clear()
    {
        array_splice($this->elements, 0);
    }
    public function addAll($array)
    {
        $this->elements = array_merge($this->elements, $array);
    }
    public function indexOf($obj)
    {
        if (in_array($obj, $this->elements, true)){
            return array_search($obj, $this->elements);
        }else {
            return 'Không tồn tại phần tử này.';
        }
        
    }
    public function isEmpty()
    {
        if (count($this->elements) === 0) {
            return 'Rỗng';
        } else {
            return 'Không rỗng';
        }
    }
    public function sort()
    {
        asort($this->elements);
        return $this->elements;
    }
    public function reset()
    {
        reset($this->elements);
    }
    public function size()
    {
        return count($this->elements);
    }
    public function printList(){
        if ($this->isEmpty()){
            return null;
        }else {
            return $this->elements;
        }
    }
}
