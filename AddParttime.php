<?php
/* Check employee is working part time or full time 
then calculate employee wage*/
echo"Welcome to Employee Wage Computation....\n";
//getting random 0 ,1 and 2
$check=rand(0,2);
//Declare two constant varible is_PartTime and is_FullTime
$is_PartTime=1;
$is_FullTime=2;
$empRatePerHrs=20;
$empWage=0;
if($check==$is_PartTime){
    echo"Employee is working part time \n";
    $empHrs=4;
}
elseif($check==$is_FullTime){
    echo"Employee is working full time \n";
    $empHrs=8;
}
else{
    echo"Employee is not working \n";
    $empHrs=0;
}
//calculate Daily Employee wage
$empWage=$empRatePerHrs*$empHrs;
echo"Daily Employee Wage is:" .$empWage;
?>