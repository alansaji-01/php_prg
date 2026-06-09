<?php
function checkEvenOdd($number)
{
    if ($number % 2 == 0)
        echo "$number is Even";
    else
        echo "$number is Odd";
}

checkEvenOdd(17);
?>