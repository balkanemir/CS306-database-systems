<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Pid = $_GET['ids'];
$sql_statement = "DELETE FROM patients 
WHERE Pid = $Pid"; $result = mysqli_query($db, $sql_statement);
echo "The patient with id " . $Pid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
