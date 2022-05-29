<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Rnum = $_GET['ids'];
$sql_statement = "DELETE FROM SurgeryRooms 
WHERE Rnum = $Rnum"; $result = mysqli_query($db, $sql_statement);
echo "The surgery room with no " . $Rnum . " has been deleted successfully. ";
}
?>
<a href="admin.php">Go back to main page</a>
