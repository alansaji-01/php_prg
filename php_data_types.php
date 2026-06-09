<?php
function demonstrateDataTypes()
{
    $intVar = 42;
    $floatVar = 3.14159;
    $stringVar = "Hello, PHP!";
    $boolVar = true;
    $arrayVar = array("Apple", "Banana", "Cherry");
    $nullVar = null;

    echo "Integer: $intVar<br>";
    echo "Float: $floatVar<br>";
    echo "String: $stringVar<br>";
    echo "Boolean: " . ($boolVar ? "true" : "false") . "<br>";

    echo "Array: ";
    print_r($arrayVar);
    echo "<br>";

    echo "Null: ";
    var_dump($nullVar);
}

demonstrateDataTypes();
?>