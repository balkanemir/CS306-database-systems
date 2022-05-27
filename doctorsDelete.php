<?php
include "config.php";
if(!empty($_GET['ids']))
{
$DRid = $_GET['ids'];
$sql_statement = "DELETE FROM doctors 
WHERE DRid = $DRid"; $result = mysqli_query($db, $sql_statement);
echo "The doctor with id " . $DRid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
