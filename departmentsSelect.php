<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Dname, RoomCount FROM departments $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $department_name = $row['Dname'];
    $room_count = $row['RoomCount']; 
    echo "<li>" . $department_name . " " . $room_count . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>