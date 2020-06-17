<?php
include("./Queue.php");
class Dancer {
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}
class SquareDance extends Queue {
    public static function doubleDequeue($listBoy, $listGirl)
    {
        $str = '';
        while (!$listBoy->isEmpty() && !$listGirl->isEmpty()) {
            $str .= $listBoy->dequeue()." và ".$listGirl->dequeue()."<br>";
        }
        return $str;
    }
}



$listGirl = new SquareDance();
$listGirl->enqueue('a', false);
$listGirl->enqueue('b', false);
$listGirl->enqueue('c', false);

$listBoy = new SquareDance();
$listBoy->enqueue('d', true);
$listBoy->enqueue('e', true);
$listBoy->enqueue('f', true);
$listBoy->enqueue('g', true);

echo  SquareDance::doubleDequeue($listGirl, $listBoy);


$listGirl->enqueue('1', false);
$listGirl->enqueue('2', false);
$listGirl->enqueue('3', false);

echo  SquareDance::doubleDequeue($listGirl, $listBoy);