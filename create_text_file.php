<?php
function createAndWriteFile($filename)
{
    $file = fopen($filename, "w");

    fwrite($file, "Hello, this is line 1\n");
    fwrite($file, "This is line 2\n");
    fwrite($file, "This is line 3\n");

    fclose($file);

    echo "File created successfully";
}

createAndWriteFile("sample.txt");
?>