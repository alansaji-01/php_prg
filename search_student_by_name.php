<?php
function searchStudentByName($name)
{
    $db = new SQLite3("school.db");

    $result = $db->query(
        "SELECT * FROM students
         WHERE name LIKE '%$name%'"
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

searchStudentByName("Amit");
?>