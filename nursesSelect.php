
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Nname, Nage FROM nurses $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $nurse_name = $row['Nname'];
    $nurse_age = $row['Nage']; 
    echo "<li>" . $nurse_name . " " . $nurse_age . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>