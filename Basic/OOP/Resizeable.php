<?php

interface Resizeable
{
    public function resize();
}

abstract class Shape
{
    abstract public function getArea();

    abstract public function getPerimeter();
    public function maxArea($arr)
    {
        $maxArea = $arr[0]['S'];
        for ($i = 0; $i < count($arr); $i++) {
            if ($maxArea < $arr[$i]['S']) {
                $maxArea = $arr[$i]['S'];
            }
        }
        return 'Diện tích lớn nhất = ' . $maxArea;
    }
    public function minPerimeter($arr)
    {
        $minPerimeter = $arr[0]['C'];
        for ($i = 0; $i < count($arr); $i++) {
            if ($minPerimeter > $arr[$i]['C']) {
                $minPerimeter = $arr[$i]['C'];
            }
        }
        return 'Chu vi nhỏ nhất = ' . $minPerimeter;
    }
    public function findName($arr,  $name)
    {
        $arr;
        $str = '';
        foreach ($arr as $value) {
            if ($value['name'] === $name) {
                return $value;
            }
        }
        return 'Không tồn tại hình này.';
    }
}
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;
    public $name;
    public function __construct($name)
    {
        $this->width = 1.0;
        $this->height = 1.0;
        $this->name = $name;
    }
    public function resize()
    {
        $this->width += rand(1, 100);
        $this->height += rand(1, 100);
    }
    public function getArea()
    {
        return $this->height * $this->width;
    }
    public function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}
class Square extends Rectangle
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
}
class Circle extends Shape implements Resizeable
{
    public $radius;
    private const PI = 3.14;
    public $name;
    public function __construct($name)
    {
        $this->radius = 1.0;
        $this->name = $name;
    }
    public function resize()
    {
        $this->radius += rand(1, 100);
    }
    public function getArea()
    {
        return self::PI * $this->radius ** 2;
    }
    public function getPerimeter()
    {
        return self::PI * $this->radius * 2;
    }
}
$arrayShape = [];
for ($i = 0; $i < 20; $i++) {
    $rand = rand(1, 3);
    if ($rand === 1) {
        $Shape = new Circle("Circle$i");
        $Shape->resize();
        array_push($arrayShape, ['name' => $Shape->name, 'r' => $Shape->radius, 'S' => $Shape->getArea(), 'C' => $Shape->getPerimeter()]);
    } elseif ($rand === 2) {
        $Shape = new Rectangle("Rectangle$i");
        $Shape->resize();
        array_push($arrayShape, ['name' => $Shape->name, 'w' => $Shape->width, 'h' => $Shape->height, 'S' => $Shape->getArea(), 'C' => $Shape->getPerimeter()]);
    } else {
        $Shape = new Square("Square$i");
        $Shape->resize();
        array_push($arrayShape, ['name' => $Shape->name, 'w' => $Shape->width, 'S' => $Shape->getArea(), 'C' => $Shape->getPerimeter()]);
    }
}
var_dump($arrayShape);
echo $Shape->maxArea($arrayShape) . '<br>';
echo $Shape->minPerimeter($arrayShape) . '<br>';
print_r($Shape->findName($arrayShape, 'Circle4'));




