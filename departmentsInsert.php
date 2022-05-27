<?php
include "config.php";
if(!empty($_POST['dname']))
{
    $did = $_POST['did'];
    $dname = $_POST['dname'];
    $roomcount = $_POST["roomcount"];
    $sql_statement = "INSERT INTO departments(did ,dname, RoomCount) VALUES('$did','$dname', $roomcount)";
    $result = mysqli_query($db, $sql_statement);
    echo "The department " . $dname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
