<?php

class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}

interface Comparable
{
    public function  compareTo($objOther);
}

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius() > $circleOtherRadius) {
            return $this->getName()." > ".$circleOther->getName();
        } else if ($this->getRadius() < $circleOtherRadius) {
            return $this->getName()." < ".$circleOther->getName();
        } else {
            return $this->getName()." = ".$circleOther->getName();
        }
    }
}

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
echo $circleOne->compareTo($circleTwo);