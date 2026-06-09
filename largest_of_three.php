<?php
function findLargest($a, $b, $c)
{
    if ($a >= $b)
    {
        if ($a >= $c)
            echo "Largest number is: " . $a;
        else
            echo "Largest number is: " . $c;
    }
    else
    {
        if ($b >= $c)
            echo "Largest number is: " . $b;
        else
            echo "Largest number is: " . $c;
    }
}

findLargest(45, 78, 56);
?>