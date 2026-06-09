<?php
function countTotalRecords()
{
    $db = new SQLite3("school.db");

    $count = $db->querySingle(
        "SELECT COUNT(*) FROM students"
    );

    echo "Total Records: " . $count;

    $db->close();
}

countTotalRecords();
?>