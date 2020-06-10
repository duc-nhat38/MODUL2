<?php

class Employee{    
    private $name;
    private $birthDay;
    private $address;    
    public function __construct( $name, $birthDay, $address)
    {   
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->address = $address;        
    }
    public function getName(){
        return $this->name;
    }
    public function getbirthDay(){
        return $this->birthDay;
    }
    public function getaddress(){
        return $this->address;
    }
}
class Manager {
    public static $List;
    public function __construct()
    {
        self::$List = [];
    }
    public function addEmployee($Employee)
    {
        self::$List[] = $Employee;
    }
    public function getEmployees()
    {
        $index = 0;
        $result = null;
        foreach (self::$List as $value) {

            $result .= $index.' '. $value->getSurName() .' '. $value->getName() .' '. $value->getBirthDay() .' '. $value->getAddress() .' '. $value->getJobPosition() . '<br>';
            $index++;
        }
        return $result;
    }
}
$manager = new Manager();

$list =[];
 if ($_SERVER['REQUEST_METHOD']==='POST') {
     $name = $_POST['name'];
     $age = $_POST['age'];
     $add = $_POST['add'];
 }
$manager->addEmployee(new Employee($name, $age, $add));
$_SESSION['myarray'] = Manager::$List;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testthoi.php" method="post">
        <label for="name"></label>
        <input type="text" id="name" name="name"><br>
        <label for="age"></label>
        <input type="number" id="age" name="age"><br>
        <label for="add"></label>
        <input type="text" id="add" name="add"><br>
        <input type="submit">
    </form>
</body>
</html>