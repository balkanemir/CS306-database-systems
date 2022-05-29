<?php
include "config.php";
if(!empty($_POST['date']))
{
    $Aid = $_POST['Aid'];
    $date = $_POST['date'];
    $DRid = $_POST["DRid"];
    $sql_statement = "INSERT INTO appointments(Aid ,date, DRid) VALUES('$Aid','$date', $DRid)";
    $result = mysqli_query($db, $sql_statement);
    echo "The appointment " . $date . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
