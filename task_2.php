<?php
//Task 2: Array Manipulation
$numbers = [1,2,3,4,5,6,7,8,9,10];
function removeEven($numbers) {
    return $numbers % 2 == 1;
}

$removeEvenNumbers=array_filter($numbers,'removeEven');
print_r($removeEvenNumbers);