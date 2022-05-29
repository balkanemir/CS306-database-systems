<?php
include "config.php";
?>

<form action="nursesDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Nid, Nname, Nage FROM nurses";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Nid = $id_rows['Nid'];
    $Nname = $id_rows['Nname'];
    $Nage = $id_rows['Nage'];
    echo "<option value=$Nid>" . $Nname . " - "  . $Nage . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="nurse_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="nursesSelect.php", method="GET">
<select name="ids">
    <option value="WHERE Nage > 40;">nurses are greater than 40 years old</option>
    <option value="WHERE Nage <= 30;">nurses are equal and less than 30 years old</option>
    <option value="WHERE Nage > 30 AND Nage < 40;">nurses are greater than 30 and less than 40 years old</option>
    <option value="WHERE Nname = 'John';">nurses have name of John</option>
</select>
<button>SEARCH</button>
</form>