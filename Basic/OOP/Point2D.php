<?php

class Point2D
{
    protected  $x;
    protected  $y;
    public function __construct(float $x = 0.0, float $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX(float $newX)
    {
        $this->x = $newX;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY(float $newY)
    {
        $this->y = $newY;
    }
    public function setXY(float $newX, float $newY)
    {
        $this->x = $newX;
        $this->y = $newY;
    }
    public function getXY()
    {
        $arr = [$this->x, $this->y];
        return $arr;
    }
    public function __toString()
    {
        return "X = ".$this->x."<br>"."Y = ".$this->y;
    }
}

class Point3D extends Point2D {
    protected $z;
    public function __construct(float $x, float $y, float $z = 0.0){
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ(){
        return  $this->z;
    }
    public function setZ(float $newZ){
       $this->z = $newZ;
    }
    public function setXYZ(float $newX, float $newY, float $newZ){
        $this->x = $newX;
        $this->y = $newY;
        $this->z = $newZ;
    }
    public function getXYZ()
    {
        $arr = [$this->x, $this->y, $this->z];
        return $arr;
    }
    public function __toString()
    {
        return "X = ".$this->x."<br>"."Y = ".$this->y."<br>"."Z = ".$this->z;
    }
}

$point = new Point2D(2.0, 3.0);
print_r($point->getXY()) ;
$point->setX(5);
echo $point->getX();
$point2 = new Point3D(2.0, 3.0, 4);
print_r($point2->getXYZ()) ;
?>