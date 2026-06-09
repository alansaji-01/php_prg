<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");

$message = "";
$nameResult = "";
$phoneResult = "";

if(isset($_POST['submit']))
{
    $roll = trim($_POST['roll_no']);
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if($roll == "")
    {
        $message = "Roll Number is mandatory";
    }
    else
    {
        if($name == "" && $phone == "")
        {
            $result = mysqli_query($conn,
                "SELECT * FROM students WHERE roll_no='$roll'");

            if(mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                $nameResult = $row['name'];
                $phoneResult = $row['phone'];
                $message = "Student Found";
            }
            else
            {
                $message = "Student not found";
            }
        }
        else
        {
            $check = mysqli_query($conn,
                "SELECT * FROM students WHERE roll_no='$roll'");

            if(mysqli_num_rows($check) > 0)
            {
                $message = "Roll Number already exists";
            }
            else
            {
                mysqli_query($conn,
                "INSERT INTO students(roll_no,name,phone)
                 VALUES('$roll','$name','$phone')");

                $message = "Record inserted successfully";
            }
        }
    }
}
?>

<html>
<head>
    <title>Student Management</title>
</head>
<body>

<h2>Student Management System</h2>

<form method="post">

    Roll Number:
    <input type="text" name="roll_no" required>
    <br><br>

    Name:
    <input type="text" name="name"
           value="<?php echo $nameResult; ?>">
    <br><br>

    Phone Number:
    <input type="text" name="phone"
           value="<?php echo $phoneResult; ?>">
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<br>

<?php
echo $message;
?>

</body>
</html>