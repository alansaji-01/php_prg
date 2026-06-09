<?php
class AgeTooYoungException extends Exception
{
}

function validateAge($age)
{
    if($age < 18)
    {
        throw new AgeTooYoungException("Age must be 18 or above");
    }

    echo "Eligible";
}

try
{
    validateAge(16);
}
catch(AgeTooYoungException $e)
{
    echo $e->getMessage();
}
?>