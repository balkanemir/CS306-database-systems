<?php
include "config.php";
?>

<form action="departmentsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Did, Dname, RoomCount FROM departments";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Did = $id_rows['Did'];
    $Dname = $id_rows['Dname'];
    $RoomCount = $id_rows['RoomCount'];
    echo "<option value=$Did>" . $Dname . " - "  . $RoomCount . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="department_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="departmentsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE RoomCount > 1;">departments have room count greater than 1</option>
    <option value="WHERE RoomCount < 4;">departments have room count less than 4</option>
    <option value="WHERE RoomCount > 2 AND RoomCount < 6;">departments have room count greater than 2 and less than 6</option>
    <option value="WHERE Dname = 'Dermatology';">departments have name of Dermatology</option>
</select>
<button>SEARCH</button>
</form>
