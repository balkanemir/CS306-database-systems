<?php

include "config.php";
$sql_statement = "SELECT * FROM hospitals";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $hospital_id = $row['Hid'];
    $hospital_name = $row['Hname'];
    $personal_size = $row['PersonalSize']; 
    echo $hospital_id . " " . $hospital_name . " " . $personal_size . "<br>";
}

?>
<a href="admin.php">Go back to main page</a>