<?php
include "config.php";
if(!empty($_GET['ids']))
{
$Hid = $_GET['ids'];
$sql_statement = "DELETE FROM hospitals 
WHERE Hid = $Hid"; $result = mysqli_query($db, $sql_statement);
echo "Your result is " . $result;
}
?>
