<?php

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