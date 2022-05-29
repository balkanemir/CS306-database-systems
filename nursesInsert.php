<?php
include "config.php";
if(!empty($_POST['Nname']))
{
    $Nid = $_POST['Nid'];
    $Nname = $_POST['Nname'];
    $Nage = $_POST["Nage"];
    $sql_statement = "INSERT INTO nurses(Nid ,Nname, Nage) VALUES('$Nid','$Nname', $Nage)";
    $result = mysqli_query($db, $sql_statement);
    echo "The nurse " . $Nname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
