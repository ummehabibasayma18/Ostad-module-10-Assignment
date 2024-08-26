<?php

function countVowels($str) {
    $str = strtolower($str);
   
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;


    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

function reverseString($str) {
    return strrev($str);
}

function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = reverseString($string);

        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}


$strings = ["Hello", "World", "PHP", "Programming"];
processStrings($strings);

?>
