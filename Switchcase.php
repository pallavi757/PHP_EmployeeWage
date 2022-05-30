<?php
/* Check employee is working part time or full time using switchcase statement
then calculate employee wage*/
echo".....Welcome to Employee Wage Computation....\n";
echo"---------------------------------------------\n";
//getting random 0 ,1 and 2
$check=rand(0,2);
//Declare two constant is_PartTime and is_FullTime
$is_PartTime=1;
$is_FullTime=2;
$empRatePerHrs=20;
$empWage=0;
$empHrs=0;
//using switchcase
switch($check){
    case $is_PartTime:
    echo"Employee is working part time \n";
    $empHrs=4;
    break;
    case $is_FullTime:
    echo"Employee is working full time \n";
    $empHrs=8;
    break;
    default:
    echo"Employee is not working \n";
    $empHrs=0;
}
//calculate Daily Employee wage
$empWage=$empRatePerHrs*$empHrs;
echo"Daily Employee Wage is:" .$empWage;
?>