<?php
$num1 = 4; 
$num2 = 5; 
$num3 = 6;
if($num1>$num2 && $num1>$num3){
    printf("The largest number = %d", $num1);
}else if($num2>$num1 && $num2>$num3){
    printf("The largest number = %d", $num2);
}else{
    printf("The largest number = %d", $num3);
}