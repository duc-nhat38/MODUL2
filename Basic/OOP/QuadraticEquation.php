<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function get_a()
    {
        return $this->a;
    }
    public function get_b()
    {
        return $this->b;
    }
    public function get_c()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        return ((($this->b) ** 2) - (4 * $this->a * $this->c));
    }
    public function getRoot1()
    {

        return ((-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a));
    }
    public function getRoot2()
    {

        return ((-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a));
    }
}
$quadraticEquation = new QuadraticEquation(1, 3, 1);
$delta =   $quadraticEquation->getDiscriminant();
if ($delta > 0) {
    echo $quadraticEquation->getRoot1();
    echo "<br>";
    echo $quadraticEquation->getRoot2();
} elseif ($delta === 0) {
    echo $quadraticEquation->getRoot1();
} else {
    echo "The equation has no roots";
}
