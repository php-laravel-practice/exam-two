<?php

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($string) {
    $vowelCount = preg_match_all('/[aeiou]/i', $string);
    return $vowelCount;
}

// Function to reverse a string
function reverseString($string) {
    return strrev($string);
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
