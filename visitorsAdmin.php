<?php
include "config.php";
?>

<form action="visitorsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Vid, Vname, Vage FROM visitors";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Vid = $id_rows['Vid'];
    $Vname = $id_rows['Vname'];
    $Vage = $id_rows['Vage'];
    echo "<option value=$Vid>" . $Vname . " - "  . $Vage . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="visitor_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="visitorsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE Vage > 40;">visitors are greater than 40 years old</option>
    <option value="WHERE Vage <= 30;">visitors are equal and less than 30 years old</option>
    <option value="WHERE Vage > 30 AND Vage < 40;">visitors are greater than 30 and less than 40 years old</option>
    <option value="WHERE Vname = 'John';">visitors have name of John</option>
</select>
<button>SEARCH</button>
</form>

