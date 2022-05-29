<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Nid = $_GET['ids'];
$sql_statement = "DELETE FROM nurses 
WHERE Nid = $Nid"; $result = mysqli_query($db, $sql_statement);
echo "The nurse with id " . $Nid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
