<?php
class Calculator
{
    private $num1;
    private $num2;

    function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    function add()
    {
        return $this->num1 + $this->num2;
    }

    function subtract()
    {
        return $this->num1 - $this->num2;
    }
}

$calc = new Calculator(25, 10);

echo "Addition: " . $calc->add() . "<br>";
echo "Subtraction: " . $calc->subtract();
?>