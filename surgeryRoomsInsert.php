<?php
include "config.php";
if(!empty($_POST['Rnum']))
{
    $Rnum = $_POST['Rnum'];
    $RoomSize = $_POST["RoomSize"];
    $sql_statement = "INSERT INTO SurgeryRooms(Rnum, RoomSize) VALUES('$Rnum', $RoomSize)";
    $result = mysqli_query($db, $sql_statement);
    echo "The surgery room " . $Rnum . " has been added succesfully.";
}
?>
<a href="admin.php">Go back to main page</a>
