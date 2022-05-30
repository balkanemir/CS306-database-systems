<?php
 include "config.php";
?>
<html>
    <head>
        <title>Find Hospital</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="container" class="center">
            
        <h2>Find Hospital.</h2>
        <h4>Everything about the hospitals.</h4>
        <form action="webHospitalsProfile.php", method="GET">
            <select name="ids">
            <?php
            $sql_command = "SELECT Hname, Hid FROM hospitals";
            $myresult = mysqli_query($db, $sql_command);
            while($id_rows = mysqli_fetch_assoc($myresult))
            {
                $Hid = $id_rows['Hid'];
                $Hname = $id_rows['Hname'];
                echo "<option value=$Hid>" . $Hname . "</option>";
            }
            ?>
            </select>
            <button>GO TO PROFILE</button>
            </form>
        </div>
    </body>
</html>