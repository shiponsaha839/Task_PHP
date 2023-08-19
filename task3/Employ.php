<?php

class Employee {
    private $name;
    private $salary;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;   
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;   
    }

}

$employee = new Employee();
$employee->setName("Shipon Saha");
$employee->setSalary(25000);
echo "Employee Name = ".$employee->getName() . ". Employee salary = ".$employee->getSalary();