<?php
function calculateGrade($marks)
{
    if($marks >= 90)
        return "A+";
    elseif($marks >= 80)
        return "A";
    elseif($marks >= 70)
        return "B";
    elseif($marks >= 60)
        return "C";
    elseif($marks >= 50)
        return "D";
    else
        return "F";
}

function updateStudentMarks($rollNo, $newMarks)
{
    $db = new SQLite3("school.db");

    $grade = calculateGrade($newMarks);

    $db->exec("UPDATE students
               SET marks = $newMarks,
                   grade = '$grade'
               WHERE roll_no = $rollNo");

    echo "Record updated successfully";

    $db->close();
}

updateStudentMarks(103, 88);
?>