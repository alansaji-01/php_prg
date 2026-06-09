<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if($b == 0)
    {
        return "Cannot divide by zero";
    }

    return $a / $b;
}

function factorial($n)
{
    if($n <= 1)
    {
        return 1;
    }

    return $n * factorial($n - 1);
}

?>
