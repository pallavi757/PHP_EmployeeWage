<?php
/* Print welcome Message and Check Employee Present or Absent 
using random function*/
echo"Welcome to Employee Wage Computation....\n";
//getting 0 and 1
$check=rand(0,1);
$isPresent=1;
$empRatePerHrs=20;
$empWage=0;
if($check==$isPresent){
    echo"Employee is present \n";
    $empHrs=8;
}
else{
    echo"Employee is absent \n";
    $empHrs=0;
}
//calculate Daily Employee wage
$empWage=$empRatePerHrs*$empHrs;
echo"Daily Employee Wage is:" .$empWage;
?>