
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Vname, Vage FROM visitors $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $visitor_name = $row['Vname'];
    $visitor_age = $row['Vage']; 
    echo "<li>" . $visitor_name . " " . $visitor_age . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>