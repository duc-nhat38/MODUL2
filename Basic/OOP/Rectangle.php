<?php
class Rectangle {
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArena() {
        return $this->width*$this->height;
    }
    public function getPerimeter() {
        return ($this->width+$this->height)*2;
    }
    public function Display() {
        return "chiều dài : ".$this->height."chiều rộng :".$this->width;
    }
        
    }
    $rectangle = new Rectangle(10,20);
    echo $rectangle->getArena();
    echo"<br>";
    echo $rectangle->getPerimeter();
    echo"<br>";
    echo $rectangle->Display();
