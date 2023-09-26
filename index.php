<?php
// Task 1: String Manipulation

$text="The quick brown fox jumps over the lazy dog.";

function stringManipulation($text) {
    $stringLowercase=strtolower($text);
    $replaceString=str_replace("brown","red",$stringLowercase);
    return $replaceString;
}

echo stringManipulation($text);


//Task 2: Array Manipulation
$numbers = [1,2,3,4,5,6,7,8,9,10];
function removeEven($numbers) {
    return $numbers % 2 == 1;
}

$removeEvenNumbers=array_filter($numbers,'removeEven');
print_r($removeEvenNumbers);

//Task 3: Array Sorting
$grades=[85, 92, 78, 88, 95];

function descendingOrder($grades) {
    $reverseSort=rsort($grades);
   return $grades;
}

print_r(descendingOrder($grades));


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




 //Task 5: Password Generator

 function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    $allChar=$lowercaseChars.$uppercaseChars.$numberChars.$specialChars;
    $totalChars = strlen($allChar);
    $password = '';
    for($i=0;$i<$length;$i++){
        $indexChar=mt_rand(0,$totalChars-1);
        $password=$password.$allChar[$indexChar];
        
    }
    return $password;
    

 }

 $password=generatePassword(12);

 echo "Generated Password: $password";