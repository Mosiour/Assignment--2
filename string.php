<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCounts = preg_match_all('/[aeiouAEIOU]/i', $string);

    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCounts, Reversed String: $reversedString\n";
}