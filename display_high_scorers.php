<?php
function displayHighScorers($minMarks)
{
    $db = new SQLite3("school.db");

    $result = $db->query(
        "SELECT * FROM students
         WHERE marks > $minMarks"
    );

    while($row = $result->fetchArray(SQLITE3_ASSOC))
    {
        echo "Roll No: " . $row['roll_no'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Marks: " . $row['marks'] . "<br>";
        echo "Grade: " . $row['grade'] . "<br>";
        echo "City: " . $row['city'] . "<br><br>";
    }

    $db->close();
}

displayHighScorers(80);
?>