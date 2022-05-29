
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Sname, Sage FROM secretaries $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $secretary_name = $row['Sname'];
    $secretary_age = $row['Sage']; 
    echo "<li>" . $secretary_name . " " . $secretary_age . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>