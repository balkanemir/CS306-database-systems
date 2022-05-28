<?php
include "config.php";
if(!empty($_POST['Pname']))
{
    $Pid = $_POST['Pid'];
    $Pname = $_POST['Pname'];
    $illness = $_POST["illness"];
    $Page = $_POST["Page"];
    $sql_statement = "INSERT INTO patients(Pid ,Pname, Page, illness) VALUES('$Pid','$Pname', $Page, '$illness')";
    $result = mysqli_query($db, $sql_statement);
    echo "The patient " . $Pname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
