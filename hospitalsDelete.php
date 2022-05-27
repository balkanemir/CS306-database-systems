<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Hid = $_GET['ids'];
$sql_statement = "DELETE FROM hospitals 
WHERE Hid = $Hid"; $result = mysqli_query($db, $sql_statement);
echo "The hospital with id " . $Hid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
