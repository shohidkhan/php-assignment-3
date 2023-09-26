<?php
// Task 1: String Manipulation

$text="The quick brown fox jumps over the lazy dog.";

function stringManipulation($text) {
    $stringLowercase=strtolower($text);
    $replaceString=str_replace("brown","red",$stringLowercase);
    return $replaceString;
}

echo stringManipulation($text);











 