<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Vid = $_GET['ids'];
$sql_statement = "DELETE FROM visitors 
WHERE Vid = $Vid"; $result = mysqli_query($db, $sql_statement);
echo "The visitor with id " . $Vid . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
