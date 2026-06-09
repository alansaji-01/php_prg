<?php
function createDatabaseAndTable()
{
    $db = new SQLite3("school.db");

    $sql = "CREATE TABLE IF NOT EXISTS students(
                roll_no INTEGER PRIMARY KEY,
                name TEXT,
                marks INTEGER,
                grade TEXT,
                city TEXT
            )";

    $db->exec($sql);

    echo "Database and table created successfully";

    $db->close();
}

createDatabaseAndTable();
?>