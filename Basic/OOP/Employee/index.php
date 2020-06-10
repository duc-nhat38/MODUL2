<?php
 include_once "Employee.php";
 include_once "EmployeeManager.php";

use Employ\Employee;
use Manager\EmployeeManager;

 $employeeManager = new EmployeeManager();
 $employeeManager->addEmployee(new Employee("pham", 'duc',1998, 'ha tinh', 'student'));
 $employeeManager->addEmployee(new Employee("tran", 'a',1998, 'ha tinh', 'student'));
 $employeeManager->addEmployee(new Employee("tran", 'b',1998, 'ha tinh', 'student'));
 $employeeManager->addEmployee(new Employee("le", 'c',1998, 'ha tinh', 'student'));
 $employeeManager->addEmployee( new Employee("hoang", 'd',1998, 'ha tinh', 'student'));

print_r( $employeeManager->getEmployees());
 print_r($employeeManager->delEmployee(3)) ;


?>