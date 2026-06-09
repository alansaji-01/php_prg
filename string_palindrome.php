<?php
function isPalindrome($str)
{
    $str = strtolower($str);

    if($str == strrev($str))
        echo "String is Palindrome";
    else
        echo "String is Not Palindrome";
}

isPalindrome("madam");
?>