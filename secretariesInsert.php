<?php
include "config.php";
if(!empty($_POST['Sname']))
{
    $Sid = $_POST['Sid'];
    $Sname = $_POST['Sname'];
    $Sage = $_POST["Sage"];
    $sql_statement = "INSERT INTO secretaries(Sid ,Sname, Sage) VALUES('$Sid','$Sname', $Sage)";
    $result = mysqli_query($db, $sql_statement);
    echo "The secretary " . $Sname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
