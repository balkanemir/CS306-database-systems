<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Aid = $_GET['ids'];
$sql_statement = "DELETE FROM appointments 
WHERE Aid = $Aid"; $result = mysqli_query($db, $sql_statement);
echo "The appointment with id " . $Aid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
