<?php
function anagram($a, $b) {
    if (count_chars($a, 1) == count_chars($b, 1)) {
        return"The two strings are anagram";
    } else {
        return"The two strings are not anagram";
    }
}
print_r(anagram('tar', 'rat') . "<br>");
print_r(anagram('tar', 'bat') . "<br>");
?>
