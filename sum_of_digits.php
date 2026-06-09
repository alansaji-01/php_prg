<?php
function sumOfDigits($number)
{
    $sum = 0;

    while($number > 0)
    {
        $digit = $number % 10;
        $sum = $sum + $digit;
        $number = (int)($number / 10);
    }

    echo "Sum of digits = " . $sum;
}

sumOfDigits(12345);
?>