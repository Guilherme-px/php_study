<div class="title">Palindrome challenge</div>

<?php

function checkPalindrom ($str) {
    $reverse = strrev($str);

    if ($str == $reverse) {
        return "It is Palindrome";
    } else {
        return "Not Palindrome";
    }
}

echo checkPalindrom('lol') . '<br>';
echo checkPalindrom('arara') . '<br>';
echo checkPalindrom('ana') . '<br>';
echo checkPalindrom('ball') . '<br>';