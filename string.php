<?php 
/**
 * Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:
 * 1. Count the number of vowels (a, e, i, o, u) in each string.
 * 2. Reverse each string.
 * 3. Print the original string and the modified strings along with their vowel counts.
 */

 $strings = ["Hello", "World", "PHP", "Programming"];

 foreach ($strings as $string) {
     $vowelCount = countVowels($string);
     $reversedString = reverseString($string);
     printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n\n", $string, $vowelCount, $reversedString);
 }

 function reverseString($string) {
     return strrev($string);
 }

 function countVowels($string) {
     $vowelCount = 0;
     $vowels = ['a', 'e', 'i', 'o', 'u'];
     foreach (str_split($string) as $char) {
         if (in_array($char, $vowels)) {
             $vowelCount++;
         }
     }
     return $vowelCount;
 }