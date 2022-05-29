<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Sid = $_GET['ids'];
$sql_statement = "DELETE FROM secretaries 
WHERE Sid = $Sid"; $result = mysqli_query($db, $sql_statement);
echo "The secretary with id " . $Sid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
