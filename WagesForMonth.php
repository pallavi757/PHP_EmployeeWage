<?php
class EmployeeWage{
$is_PartTime=1;
$is_FullTime=2;
$empRatePerHrs=20;
$numOfWorkingDays=20;
$empHrs=0;
$empWage=0;
$totalEmpWage=0;
    /* Write a function to print welcome message*/
function welcomeProgram(){
echo".....Welcome to Employee Wage Computation Program....\n";
}
//echo"---------------------------------------------\n";
/* Check employee is working part time or full time using switchcase statement
then calculate employee wage*/
function checkAttendence(){
for($days=0;$days<=$numOfWorkingDays;$days++){
$check=rand(0,2);//getting random 0 ,1 and 2
//using switchcase
switch($check){
    case $is_PartTime:
    $empHrs=4;
    break;
    case $is_FullTime:
    $empHrs=8;
    break;
    default:
    $empHrs=0;  
}
}
//calculate Daily Employee wage
function computeDailyWage(){
$empWage=$empRatePerHrs*$empHrs;
$totalEmpWage+=$empWage;
echo" \n Daily Employee Wage is:" .$empWage;

echo" \n Monthly Employee Wage is:" .$totalEmpWage;
}
}
?>
