<?php
interface Comparator {
    public function compare($circle);
}


class Circle implements Comparator {
    public $name;
    public $radius;
    public const PI = 3.14;
    public function __construct( $name, float $radius = 1.0)
    {
        $this->name = $name;
        $this->radius = $radius;
    } 
    public function compare($circle) {
        if ($this->radius > $circle->radius) {
            return $this->name.'  '.'lớn hơn'.'  '.$circle->name;
        }elseif ($this->radius === $circle->radius) {
            return $this->name.'bằng'.$circle->name;
        }else {
            return $this->name.'bé hơn'.$circle->name;
        }
    }
}

$circle1 = new Circle('circle1', 3);
$circle2 = new Circle('circle2', 5);
echo $circle1->compare($circle2);