<?php

interface Resizeable {
    public function resize();
}

class Rectangle implements Resizeable{
    protected $width;
    protected $height;
    public function __construct()
    {
     $this->width = 1.0;
     $this->height = 1.0;
    }

    public function __get($name)
    {       
        return $this->$name;
    }
    
    public function resize(){
        $this->width += rand(1,100);
        $this->height += rand(1,100);
    }
     public function getArea() {
         return $this->height*$this->width;
     }
     public function getPerimeter() {
        return ($this->height+$this->width)*2;
    }
}
 class Square extends Rectangle {
     public function __construct()
     {
         parent::__construct();
     }
 }
 
 class Circle implements Resizeable {
     private $radius;
     private const PI = 3.14;
     public function __construct(){
         $this->radius = 1.0;
     }
     public function __get($name)
    {       
        return $this->$name;
    }
    public function resize(){
        $this->radius += rand(1,100);
        
    }
    public function getArea() {
        return self::PI*$this->radius**2;
    }
    public function getPerimeter() {
        return self::PI*$this->radius*2;
    } 

 }

 $a = new Circle();
 echo $a->radius."<br>";
 echo $a->getArea()."<br>";
 echo $a->getPerimeter()."<br>";
 $a->resize();
 echo $a->radius."<br>";
 echo $a->getArea()."<br>";
 echo $a->getPerimeter()."<br>";
 $a->resize();
 echo $a->radius."<br>";
 echo $a->getArea()."<br>";
 echo $a->getPerimeter()."<br>";