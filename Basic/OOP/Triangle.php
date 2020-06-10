<?php
class Shape
{
    protected $color;
    public function __construct()
    {
        $this->color = 'black';
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($newColor)
    {
        $this->color = $newColor;
    }
}



class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;
    public function __construct()
    {
        parent::__construct();
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }
    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            exit('Không tồn tại thuộc tính này. ');
        }
    }
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            exit('Không tồn tại thuộc tính này.');
        }
    }
    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }
    public function __toString()
    {
       return "a = ".$this->side1."<br>"."b = ".$this->side2. "<br>"."c = ".$this->side3."<br>"."Diện tích = ".$this->getArea()."<br>"."Chu vi = ".$this->getPerimeter();
    }
}
 $triangle = new Triangle();
 $triangle->side1 = 3;
 $triangle->side2 = 2;
 $triangle->side3 = 4;
 echo $triangle;