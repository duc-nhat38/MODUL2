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
        return $delta = ((($this->b) ** 2) - (4 * $this->a * $this->c));
    }
    public function getRoot1()
    {

        return ((-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a));
    }
    public function getRoot2()
    {

        return ((-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a));
    }
    public function calculate()
    {
        if ($this->a !== 0) {
            if ($this->getDiscriminant() > 0) {
                return "nghiệm x1 = " . $this->getRoot1() . "<br>" . "nghiệm x2 = " . $this->getRoot2();
            } elseif ($this->getDiscriminant() === 0) {
                return "nghiệm kép x = " . $this->getRoot1();
            } else {
                return "The equation has no roots";
            }
        } if ($this->a === 0 && $this->b !== 0) {
            return "nghiệm  x = "(-$this->c / $this->b);
        }
        if ($this->a === 0 && $this->b === 0){
            return "The equation has no roots";
        }
    }
}

 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a =  $_POST['a'];
    $b = $_POST['b'];
    $c =  $_POST['c'];
}
if (filter_var($a, FILTER_VALIDATE_FLOAT) && filter_var($b, FILTER_VALIDATE_FLOAT) && filter_var($c, FILTER_VALIDATE_FLOAT)) {
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
}else {
    echo "Hãy nhập đủ các số.";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="QuadraticEquation.php" method="post">
        <label for="a">Nhập a :</label>
        <input type="number" id="a" name="a"><br>
        <label for="a">Nhập b :</label>
        <input type="number" id="b" name="b"><br>
        <label for="a">Nhập c :</label>
        <input type="number" id="c" name="c"><br>
        
        <input type="submit">
        <button><?= $quadraticEquation->calculate(); ?></button><br>
    </form>
</body>
</html>