<?php

use EmployeeWage as GlobalEmployeeWage;

class EmployeeWage{
   public $is_PartTime=1;
   public $is_FullTime=2;
  
   public $empWage=0;
   public $empHrs=0;
function welcomeProgram(){
echo".....Welcome to Employee Wage Computation....\n";
echo"---------------------------------------------\n";
}
function checkWorkingtime(){
 $empRatePerHrs=20;
//getting random 0 ,1 and 2
$check=rand(0,2);
//Declare two constant is_PartTime and is_FullTime
//using switchcase
switch($check){
    case 1:
    echo"Employee is working part time \n";
    $empHrs=4;
    EmployeeWage::computeDailyWage($empRatePerHrs,$empHrs);
    break;
    case 2:
    echo"Employee is working full time \n";
    $empHrs=8;
    EmployeeWage::computeDailyWage($empRatePerHrs,$empHrs);
    break;
    default:
    echo"Employee is not working \n";
    $empHrs=0;
}
}
//calculate Daily Employee wage
function computeDailyWage($empRatePerHrs,$empHrs){
$empWage=$empRatePerHrs*$empHrs;
echo"Daily Employee Wage is:" .$empWage;
}
}
$emp=new GlobalEmployeeWage();
?>