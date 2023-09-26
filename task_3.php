<?php
//Task 3: Array Sorting
$grades=[85, 92, 78, 88, 95];

function descendingOrder($grades) {
    $reverseSort=rsort($grades);
   return $grades;
}

print_r(descendingOrder($grades));