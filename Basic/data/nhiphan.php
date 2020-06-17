<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="nhiphan.php" method="post">

        <label for="number">Nhập số :</label>
        <input type="number" name="number" id="number"><br>
        <input type="submit" value="Run">

    </form>
</body>

</html>
<?php
class Stack
{
    public $stack;


    public function __construct()
    {
        $this->stack = array();
    }

    public function push($data)
    {

        array_unshift($this->stack, $data);
    }
    public function pop()
    {

        return array_shift($this->stack);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = (int) $_POST['number'];
    if(!empty($number)){
        $stack = new Stack();
        $count = 0;
        while ($number > 0) {
            $surplus = $number % 2;
            $stack->push($surplus);
            $count++;
            $number = floor($number / 2);
        }
        for ($i = 0; $i < $count; $i++) {
            echo $stack->pop();
        }
    }
}

?>