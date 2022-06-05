<?php
include "config.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>
            Profile
        </title>
        <body>
        <form action="webpage.php">
    <button>GO TO SEARCH</button>
</form>
        <?php
            if(!empty($_GET['ids']))
            {
                $Hid = $_GET['ids'];
                $sql_statement = "SELECT Hname FROM hospitals WHERE Hid='$Hid';";
                $result = mysqli_query($db, $sql_statement);
            }
            $row = mysqli_fetch_assoc($result);
            $hospital_name = $row['Hname'];
            echo "<h1>" . $hospital_name .  "</h1>";
            
            ?>
            <div class="cards center">
    <article class="card">
        <header>
            <h2>Departments</h2>
        </header>    
        <ul>
        <?php
            if(!empty($_GET['ids']))
            {
                $Hid = $_GET['ids'];
                $sql_statement = "SELECT d.Dname, d.Did FROM departments d JOIN Consist_of c ON c.Did = d.Did WHERE c.Hid='$Hid';";
                $result = mysqli_query($db, $sql_statement);
            }
            $depids = [];
            $deps = [];

            while($row = mysqli_fetch_assoc($result)) {
                $department_name = $row['Dname'];
                $department_id = $row['Did'];
                array_push($depids, $department_id);
                array_push($deps, $department_name);
                echo "<li>" . $department_name .  "</li>";
            }
            ?>
            </ul>
    </article>
            
    <article class="card">
        <header>
            <h2>Doctors</h2>
        </header>    
        <ul>
        <?php
            $i = 0;
            $doctorids = [];
            $docs = [];
            while($i < count($depids)) {
                if(!empty($_GET['ids']))
                {
                    $Hid = $_GET['ids'];
                    $sql_statement = "SELECT dr. DRid, dr.DRname, dr.DRage, w.since FROM doctors dr JOIN works_in w ON w.DRid = dr.DRid WHERE w.Did='$depids[$i]';";
                    $result = mysqli_query($db, $sql_statement);
                }
                while($row = mysqli_fetch_assoc($result)) {
                    $doctor_id = $row['DRid'];
                    $doctor_name = $row['DRname'];
                    $doctor_age = $row['DRage'];
                    $since = $row['since'];
                    array_push($doctorids, $doctor_id);
                    array_push($docs, $doctor_name);
                    $department = $deps[$i];
                    echo "<li><b>" . $doctor_name .  "</b> - <b>" . $doctor_age . "</b> years old <br> since: <b>" . $since . "  </b> in <b>" . $department . "</b>.</li>";
                }
                $i = $i + 1;
            }
            ?>
            </ul>
    </article>
            
    <article class="card">
        <header>
            <h2>Nurses</h2>
        </header>
        <ul>
        <?php
            $i = 0;
            while($i < count($doctorids)) {
                if(!empty($_GET['ids']))
                {
                    $Hid = $_GET['ids'];
                    $sql_statement = "SELECT N.Nname, N.Nage FROM nurses N JOIN works_with w ON w.Nid = N.Nid WHERE w.DRid='$doctorids[$i]';";
                    $result = mysqli_query($db, $sql_statement);
                }
                while($row = mysqli_fetch_assoc($result)) {
                    $nurse_name = $row['Nname'];
                    $nurse_age = $row['Nage'];
                    $doctor = $docs[$i];
                    echo "<li><b>" . $nurse_name .  "</b> - <b>" . $nurse_age . "</b> years old <br> Works with: <b>" . $doctor . "</b>.</li>";
                }
                $i = $i + 1;
            }
            ?>
            </ul>
    </article>
    <article class="card">
        <header>
            <h2>Surgery Rooms</h2>
        </header>
        <ul>
        <?php
            $i = 0;
            while($i < count($doctorids)) {
                if(!empty($_GET['ids']))
                {
                    $Hid = $_GET['ids'];
                    $sql_statement = "SELECT R.Rnum, R.RoomSize FROM surgeryRooms R JOIN operates_in o ON o.Rnum = R.Rnum WHERE o.DRid='$doctorids[$i]';";
                    $result = mysqli_query($db, $sql_statement);
                }
                while($row = mysqli_fetch_assoc($result)) {
                    $room_num = $row['Rnum'];
                    $room_size = $row['RoomSize'];
                    $doctor = $docs[$i];
                    echo "<li> Doctor <b>" . $doctor .  " </b> is allowed to operate in room <b>" . $room_num . " </b> (size: <b>" . $room_size . "</b>)</b>.</li>";
                }
                $i = $i + 1;
            }
            ?>
    </ul>
    </article>
        </body>
    </head>
  
</html>