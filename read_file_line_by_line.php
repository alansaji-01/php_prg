<?php
function readFileLineByLine($filename)
{
    if(file_exists($filename))
    {
        $file = fopen($filename, "r");

        while(($line = fgets($file)) != false)
        {
            echo $line . "<br>";
        }

        fclose($file);
    }
    else
    {
        echo "File does not exist";
    }
}

readFileLineByLine("sample.txt");
?>