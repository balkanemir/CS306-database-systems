<?php
include "config.php";
?>

<form action="secretariesDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Sid, Sname, Sage FROM secretaries";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Sid = $id_rows['Sid'];
    $Sname = $id_rows['Sname'];
    $Sage = $id_rows['Sage'];
    echo "<option value=$Sid>" . $Sname . " - "  . $Sage . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="secretary_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="secretariesSelect.php", method="GET">
<select name="ids">
    <option value="WHERE Sage > 40;">secretaries are greater than 40 years old</option>
    <option value="WHERE Sage <= 30;">secretaries are equal and less than 30 years old</option>
    <option value="WHERE Sage > 30 AND Sage < 40;">secretaries are greater than 30 and less than 40 years old</option>
    <option value="WHERE Sname = 'Suzan';">secretaries have name of Suzan</option>
</select>
<button>SEARCH</button>
</form>

