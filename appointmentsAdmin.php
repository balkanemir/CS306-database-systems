<?php
include "config.php";
?>

<form action="appointmentsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Aid, date, DRid FROM appointments";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Aid = $id_rows['Aid'];
    $date = $id_rows['date'];
    $DRid = $id_rows['DRid'];
    echo "<option value=$Aid>" . $date . " - "  . $DRid . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="appointment_insertion.html", method="GET">
<button>ADD</button>
</form>

