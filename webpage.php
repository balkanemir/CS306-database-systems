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
            <button>View Profile</button><br>
        </form>
        <form action="UserInsert.php", method="POST">
            <input type="text" , id="name", name="name", placeholder="Name"> 
            <input type="text" , id="surname", name="surname", placeholder="Surname"> 
                
            <select name="idsSup">
                <option value="miss_info">Missing/Incorrect Information Report</option>
                <option value="app_hos">Apply for Hospital</option>
                <option value="sys_iss">System Issues</option>
                <option value="oth">Others</option>
            </select>
            <button>Contact Us</button>
            
        </form>
        </div>
    </body>
</html>