<?php

namespace Manager;

class EmployeeManager
{
    private static $List;
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
    public function getEmployee($Employee)
    {
        $result = null;
        $index = 0;
        foreach (self::$List as $value) {
            foreach ($value->array() as $val) {
                if ($val === $Employee) {
                    $result .=$index." ". $value->getSurName() . " " . $value->getName() . " " . $value->getBirthDay() . " " . $value->getAddress() . " " . $value->getJobPosition() . "<br>";
                    $index++;
                }
            }
        }
        return $result;
    }
    public function delEmployee($index)
    {
        foreach (self::$List as $key => $value) {
            if ($key === $index) {
                unset(self::$List[$key]);
            }
        }
        return $this->getEmployees();
    }
    public function editEmployee($Employee, $surName, $name, $birthDay, $address, $jobPosition)
    {
        foreach (self::$List as $value) {
            foreach ($value->array() as $val) {
                if ($val === $Employee) {
                    $value->setSurName($surName);
                    $value->setName($name);
                    $value->setBirthDay($birthDay);
                    $value->setAddress($address);
                    $value->setJobPosition($jobPosition);
                }
            }
        }
    }
}
