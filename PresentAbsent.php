<?php
/* Check Employee Present or Absent using random function*/
echo"Welcome to Employee Wage Computation....\n";
//getting 0 and 1
$check=rand(0,1);
$isPresent=1;
if($check==$isPresent){
    echo"Employee is present \n";
}
else{
    echo"Employee is absent";
}
?>