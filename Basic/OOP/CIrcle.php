<?php

class Circle
{
    protected $radius;
    protected $color;
    protected const PI = 3.14;
    public function __construct($radius, $color)
    {
        $this->color =$color;
        if($radius > 0){
            $this->radius = $radius;
        }else {
            echo 'radius phải lớn hơn 0.';
        }
        
    }
    public function getRadius()
    {
        return  $this->radius;
    }
    public function setRadius($newRadius)
    {
        if ($newRadius > 0) {
            $this->radius = $newRadius;
        } else {
            echo "radius phải lớn hơn 0.";
        }
    }
    public function getColor()
    {
        return  $this->color;
    }
    public function setColor($newColor)
    {
         $this->color = $newColor;
    }

    public function calculateArea()
    {

        return self::PI * $this->radius ** 2;
    }
}

class Cylinder extends Circle
{
    protected $height;
    public function __construct( $radius, $color, $height)
    {
        parent::__construct($radius,$color);
        if ($height > 0){
            $this->height =$height;
        }else {
            echo "height phải lớn hơn 0.";
        }
        
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($newHeight)
    {
        if ($newHeight > 0) {
            $this->height = $newHeight;
        } else {
            echo "height phải lớn hơn 0.";
        }
    }
    public function calculateVolume(){
        return self::PI*$this->height*$this->radius**2;
    }
}
$circle = new Circle(2,'blue');
echo $circle->getRadius()."<br>";
echo $circle->getColor()."<br>";
echo $circle->calculateArea()."<br>";
$circle->setRadius(3);
$circle->setColor('red');
echo $circle->getRadius()."<br>";
echo $circle->getColor()."<br>";
echo $circle->calculateArea()."<br>";

$cylinder = new Cylinder(2,'blue', 4);
echo $cylinder->getRadius()."<br>";
echo $cylinder->getColor()."<br>";
echo $cylinder->getHeight()."<br>";
echo $cylinder->calculateArea()."<br>";
echo $cylinder->calculateVolume()."<br>";
$cylinder->setRadius(3);
$cylinder->setColor('red');
$cylinder->setHeight(3);
echo $cylinder->getRadius()."<br>";
echo $cylinder->getColor()."<br>";
echo $cylinder->getHeight()."<br>";
echo $cylinder->calculateArea()."<br>";
echo $cylinder->calculateVolume()."<br>";