<?php 
class Application {
    private $name;
    public static $count = 0;
    public function __construct($name) 
    {
        $this->name = $name;
        self::$count++;
    }
    public function __toString()
    {
        return 
        $this->name;
    }
}
$app1 =  new Application('code');
echo "<br>";
echo Application::$count;
$app2 =  new Application('gym');
echo "<br>";
echo Application::$count;
?>