
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT DRname, Expertise FROM doctors $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $doctor_name = $row['DRname'];
    $expertise = $row['Expertise']; 
    echo "<li>" . $doctor_name . " " . $expertise . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>