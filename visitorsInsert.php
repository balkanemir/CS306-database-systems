<?php
include "config.php";
if(!empty($_POST['Vname']))
{
    $Vid = $_POST['Vid'];
    $Vname = $_POST['Vname'];
    $Vage = $_POST["Vage"];
    $sql_statement = "INSERT INTO visitors(Vid ,Vname, Vage) VALUES('$Vid','$Vname', $Vage)";
    $result = mysqli_query($db, $sql_statement);
    echo "The visitor " . $Vname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
