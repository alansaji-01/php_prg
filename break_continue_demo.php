<?php
function demonstrateBreakContinue()
{
    echo "Break Statement<br>";

    for($i = 1; $i <= 10; $i++)
    {
        if($i == 6)
            break;

        echo $i . "<br>";
    }

    echo "<br>Continue Statement<br>";

    for($i = 1; $i <= 10; $i++)
    {
        if($i % 2 == 0)
            continue;

        echo $i . "<br>";
    }
}

demonstrateBreakContinue();
?>