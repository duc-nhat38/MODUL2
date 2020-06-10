<?php

class Point
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
 
class MovablePoint extends Point {
    protected $xSpeed;
    protected $ySpeed;
    public function __construct(float $x, float $y, float $xSpeed = 0.0, float $ySpeed = 0.0) {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed() {
        return $this->xSpeed;
    }
    public function setXSpeed( float $xSpeed) {
         $this->xSpeed = $xSpeed;
    }
    public function getYSpeed() {
        return $this->ySpeed;
    }
    public function setYSpeed( float $ySpeed) {
         $this->ySpeed = $ySpeed;
    }
    public function setSpeed(float $xSpeed, float $ySpeed) {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
   }
   public function getSpeed() {
    return "xSpeed = ".$this->xSpeed."<br>"."ySpeed = ".$this->ySpeed;
    
}
public function __toString()
    {
        return "X = ".$this->x." "."xSpeed = ".$this->xSpeed."<br>"."Y = ".$this->y." "."ySpeed = ".$this->ySpeed;
    }
public function move() {
    $this->x += $this->xSpeed;
    $this->y += $this->ySpeed;
    return "X = ".$this->x."<br>"."Y = ".$this->y;
}
}
$point = new Point(2.0, 3.5);
print_r($point->getXY()) ;
$MovablePoint = new MovablePoint(1, 2, 5,5);
echo $MovablePoint->move();