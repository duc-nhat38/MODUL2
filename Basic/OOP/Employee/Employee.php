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
    public function getSurName(){
        return $this->surName;
    }
    public function setSurName($surName){
         $this->surName = $surName;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($Name){
        $this->name = $Name;
    }
    public function getBirthDay(){
        return $this->birthDay;
    }
    public function setBirthDay($birthDay){
        $this->birthDay = $birthDay;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getJobPosition(){
        return $this->jobPosition;
    }
    public function setJobPosition($jobPosition){
        $this->jobPosition = $jobPosition;
    }
    function array(){
        return [$this->surName, $this->name,$this->birthDay,$this->address, $this->jobPosition];
    }
}

?>