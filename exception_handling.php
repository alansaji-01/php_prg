<?php
function safeFileRead($filename)
{
    try
    {
        if(!file_exists($filename))
        {
            throw new Exception("File not found");
        }

        echo file_get_contents($filename);
    }
    catch(Exception $e)
    {
        echo "Error: " . $e->getMessage();
    }
}

safeFileRead("sample.txt");
?>