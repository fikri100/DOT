<?php
class Company {
  public $name;

  function setCompanyname($name) {
    $this->name = $name;
  }

  function getCompanyname() {
    return $this->name;
  }
}

class Department {

  public $name;

  function setDepartmentname($name) {
    $this->name = $name;
  }

  function getDepartmentname(){
    return $this->name;
  }

}

class Employee{
  public $name;
  public $title = "Manager";
  public $salary= "4.000.000";
  

  function setEmployeeName($name) {
    $this->name = $name;
  }

  function getEmployeeName() {
    return $this->name;
  }

  function getEmployeeTitle() {
    return $this->title;
  }

  function getEmployeeProfile() {
    
  }

  function getEmployeeMonthlySalary() {
    return $this->salary;
  }
}

$company = new Company();
$department = new Department();
$employee = new Employee();

$company->setCompanyname("PT DOT Indonesia");
$department->setDepartmentname("Quality Assurance");
$employee->setEmployeeName("Monkey D. Luffy");

echo 'Name: ' . $employee->getEmployeeName(). '</br> Title: ' . $employee->getEmployeeTitle(). '</br> Profile: ' . $company->getCompanyname().','.$department->getDepartmentname(). '</br> Salary: ' . $employee->getEmployeeMonthlySalary();