<?php

//Task 4: Multidimensional Array

$studentGrades =[
    "student1"=> ["math"=>80,"english"=>78,"science"=>90],
    "student2"=>["math"=>90,"english"=>98,"science"=>99],
    "student3"=>["math"=>70,"english"=>58,"science"=>98],
 ];
 
 function averageGrade($studentGrades) {
     foreach($studentGrades as $student => $grade){
         $totalGrades = array_sum($grade);
         $averageGrade = $totalGrades / count($grade);
         echo "Average grade for $student:$averageGrade \n";
     }
 }
  averageGrade($studentGrades);
 