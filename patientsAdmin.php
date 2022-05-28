<?php
include "config.php";
?>

<form action="patientsDelete.php", method="GET">
<select name="ids">
<?php
$sql_command = "SELECT Pid, Pname, illness FROM patients";
$myresult = mysqli_query($db, $sql_command);
while($id_rows = mysqli_fetch_assoc($myresult))
{
    $Pid = $id_rows['Pid'];
    $Pname = $id_rows['Pname'];
    $illness = $id_rows['illness'];
    echo "<option value=$Pid>" . $Pname . " - "  . $illness . "</option>";
}
?>
</select>
<button>DELETE</button>
</form>

<form action="patient_insertion.html", method="GET">
<button>ADD</button>
</form>


<form action="patientsSelect.php", method="GET">
<select name="ids">
    <option value="WHERE illness = 'cancer';">patients have illness of cancer</option>
    <option value="WHERE Page < 30;">patients are less than 30 years old</option>
    <option value="WHERE Page > 30 AND illness = 'Flu';">patients are greater than 30 years old and have illness of flu</option>
    <option value="WHERE Pname = 'John';">patients have name of John</option>
</select>
<button>SEARCH</button>
</form>
