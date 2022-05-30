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
    <article class="card c1">
        <header>
            <h2>Departments</h2>
        </header>    
        <div>
            <p> The idea of reaching the North Pole by means of balloons appears to have been entertained many years ago. </p>
        </div>
            
    </article>
            
     <article class="card c2">
        <header>
            <h2>Doctors</h2>
        </header>    
        <div>
            <p>Short content.</p>
        </div>
    </article>
            
    <article class="card c3">
        <header>
            <h2>Nurses</h2>
        </header>
        <div>
            <p>In a curious work, published in Paris in 1863 by Delaville Dedreux, there is a
                suggestion for reaching the North Pole by an aerostat.</p>
        </div>
    </article>
    <article class="card c4">
        <header>
            <h2>Secretaries</h2>
        </header>
        <div>
            <p> The idea of reaching the North Pole by means of balloons appears to have been entertained many
                years ago. </p>
        </div>
        

    </article>
</div>
            
    
        </body>
    </head>
</html>