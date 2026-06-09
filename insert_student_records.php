<?php
function insertStudentRecords()
{
    $db = new SQLite3("school.db");

    $students = array(
        array(101, "Amit Sharma", 85, "A", "Mumbai"),
        array(102, "Priya Patel", 92, "A+", "Ahmedabad"),
        array(103, "Rahul Verma", 67, "C", "Delhi"),
        array(104, "Sneha Reddy", 78, "B", "Hyderabad"),
        array(105, "Vikram Singh", 45, "F", "Jaipur")
    );

    foreach($students as $student)
    {
        $db->exec("INSERT INTO students
        VALUES('$student[0]','$student[1]','$student[2]','$student[3]','$student[4]')");
    }

    echo "Records inserted successfully";

    $db->close();
}

insertStudentRecords();
?>