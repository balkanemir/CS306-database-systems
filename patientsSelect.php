
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Pname, Page FROM patients $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $patient_name = $row['Pname'];
    $Page = $row['Page']; 
    echo "<li>" . $patient_name . " " . $Page . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>