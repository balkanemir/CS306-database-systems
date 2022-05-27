<?php
include "config.php";
if(!empty($_POST['DRname']))
{
    $DRid = $_POST['DRid'];
    $DRname = $_POST['DRname'];
    $Expertise = $_POST["Expertise"];
    $DRage = $_POST["DRage"];
    $sql_statement = "INSERT INTO doctors(DRid ,DRname, DRage ,Expertise) VALUES('$DRid','$DRname', $DRage, '$Expertise')";
    $result = mysqli_query($db, $sql_statement);
    echo "The doctor " . $DRname . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
