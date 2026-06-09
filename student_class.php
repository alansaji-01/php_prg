<?php
class Student
{
    private $name;
    private $rollNo;
    private $marks;

    function __construct($name, $rollNo, $marks)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->marks = $marks;
    }

    function displayDetails()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Roll No: " . $this->rollNo . "<br>";
        echo "Marks: " . $this->marks;
    }
}

$student = new Student("Alan", 101, 85);
$student->displayDetails();
?>