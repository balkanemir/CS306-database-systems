<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Did = $_GET['ids'];
$sql_statement = "DELETE FROM departments 
WHERE Did = $Did"; $result = mysqli_query($db, $sql_statement);
echo "The department with id " . $Did . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
