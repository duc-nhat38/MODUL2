<?php
 namespace Employ;
class Employee{
    private $surName;
    private $name;
    private $birthDay;
    private $address;
    private $jobPosition;
    public function __construct($surName, $name, $birthDay, $address, $jobPosition)
    {
        $this->surName = $surName;
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->address = $address;
        $this->jobPosition = $jobPosition;
    }
     public function __get($name)
     {
         if (property_exists($this, $name)) {
             return $this->$name;
         }else {
             return 'Không tồn tại thuộc tính';
         }
     }
     public function __set($name, $value)
     {
         if (property_exists($this, $name)) {
              $this->$name =$value;
         }else {
             return 'Không tồn tại thuộc tính';
         }
     }
}

?>