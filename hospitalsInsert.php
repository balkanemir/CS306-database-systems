<?php
include "config.php";
if(!empty($_POST['hname']))
{
    $hid = $_POST['hid'];
    $hname = $_POST['hname'];
    $personalsize = $_POST["personalsize"];
    $sql_statement = "INSERT INTO hospitals(Hid ,Hname, PersonalSize) VALUES('$hid','$hname', $personalsize)";
    $result = mysqli_query($db, $sql_statement);
    echo "The hospital " . $hname . " has been added succesfully.";
}
echo "</ul>";
?>
<a href="admin.php">Go back to main page</a>
