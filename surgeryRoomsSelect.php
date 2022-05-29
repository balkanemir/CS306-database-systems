
<h3>SELECTION PAGE</h3>

<?php
include "config.php";
if(!empty($_GET['ids']))
{
$value = $_GET['ids'];
$sql_statement = "SELECT Rnum, RoomSize FROM surgeryRooms $value";
$result = mysqli_query($db, $sql_statement);

echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{
    $room_number = $row['Rnum'];
    $room_size = $row['RoomSize']; 
    echo "<li> Room Number: " . $room_number . " Room Size: " . $room_size . "</li>";
}
echo "</ul>";
}
?>
<a href="admin.php">Go back to main page</a>