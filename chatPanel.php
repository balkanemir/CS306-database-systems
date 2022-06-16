<html>
    <head>
        <title>Chat Panel</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>Chat Panel</header>
        <?php
            include 'config.php';
            $sql_statement = "SELECT name, adminId, topic, surname FROM users";
            $result = mysqli_query($db, $sql_statement);
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];  
                $surname = $row['surname'];  
                $aid = $row['adminId'];   
                $topic = $row['topic'];   
                echo "<a href='adminChats.php?uid=" . $aid . "'><li>" . $name . " " . $surname . " - (" . $topic . ")</li></a>
                ";
            }
            echo "</ul>";
        ?>
    </body>
</html>