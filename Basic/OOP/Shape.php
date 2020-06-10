<?php
class Shape {
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show(){
        return $this->name;
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        if ($this->width > 0 && $this->height > 0) {
            return $this->height*$this->width;
        }else {
            return "width và height phải lớn hơn 0.";
        }
    }
    public function calculatePerimeter(){
        if ($this->width > 0 && $this->height > 0) {
            return ($this->height+$this->width)*2;
        }else {
            return "width và height phải lớn hơn 0.";
        }
    }
}

class Square extends Rectangle {
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}

class Circle extends Shape {
    protected $radius;
    protected const PI = 3.14;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        if ($this->radius > 0 ) {
            return self::PI*$this->radius**2;
        }else {
            return "radius phải lớn hơn 0.";
        }
    }
    public function calculatePerimeter(){
        if ($this->radius > 0) {
            return 2*$this->radius*self::PI;
        }else {
            return "radius phải lớn hơn 0.";
        }
    }
}

class Cylinder extends Circle {
    protected $height;
    public function __construct($name, $radius, $height){
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea(){
        if ($this->radius > 0 &&  $this->height > 0) {
            return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
        }else {
            return "radius và height phải lớn hơn 0.";
        }
    }
    public function calculateVolume(){
        if ($this->radius > 0 &&  $this->height > 0) {
            return parent::calculateArea()*$this->height;
        }else {
            return "radius và height phải lớn hơn 0.";
        }
    }
}
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';