
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Hname, PersonalSize FROM hospitals $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $hospital_name = $row['Hname'];
    $personal_size = $row['PersonalSize']; 
    echo "<li>" . $hospital_name . " " . $personal_size . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>