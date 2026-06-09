<?php
function deleteStudentRecord($rollNo)
{
    $db = new SQLite3("school.db");

    $db->exec("DELETE FROM students
               WHERE roll_no = $rollNo");

    echo "Record deleted successfully";

    $db->close();
}

deleteStudentRecord(104);
?>