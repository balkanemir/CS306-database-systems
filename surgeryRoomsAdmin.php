<?php
include "config.php";
?>

<form action="surgeryRoomsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Rnum, RoomSize FROM surgeryRooms";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Rnum = $id_rows['Rnum'];
    $RoomSize = $id_rows['RoomSize'];
    echo "<option value=$Rnum> Room No: "  . $Rnum . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="surgeryRoom_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="surgeryRoomsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE RoomSize > 4;">Surgery rooms have size greater than 4</option>
    <option value="WHERE RoomSize < 7;">Surgery rooms have size less than 7</option>
    <option value="WHERE RoomSize > 3 AND RoomSize < 6;">Surgery Rooms have size greater than 3 and less than 6</option>
</select>
<button>SEARCH</button>
</form>

