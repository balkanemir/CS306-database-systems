<?php
include "config.php";
?>

<form action="hospitalsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Hid, Hname, PersonalSize FROM hospitals";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Hid = $id_rows['Hid'];
    $Hname = $id_rows['Hname'];
    $PersonalSize = $id_rows['PersonalSize'];
    echo "<option value=$Hid>" . $Hname . " - "  . $PersonalSize . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="hospital_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="hospitalsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE PersonalSize > 400;">Hospitals have personal size greater than 400</option>
    <option value="WHERE PersonalSize < 450;">Hospitals have personal size less than 450</option>
    <option value="WHERE PersonalSize > 300 AND PersonalSize < 600;">Hospitals have personal size greater than 300 and less than 600</option>
    <option value="WHERE Hname = 'Medipol';">Hospitals have name of Medipol</option>
</select>
<button>SEARCH</button>
</form>
