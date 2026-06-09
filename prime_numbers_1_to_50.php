<?php
function isPrime($num)
{
    if($num < 2)
        return false;

    for($i = 2; $i <= sqrt($num); $i++)
    {
        if($num % $i == 0)
            return false;
    }

    return true;
}

function printPrimes($start, $end)
{
    for($i = $start; $i <= $end; $i++)
    {
        if(isPrime($i))
        {
            echo $i . " ";
        }
    }
}

printPrimes(1, 50);
?>