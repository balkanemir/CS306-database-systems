<?php
    include "config.php";
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $topic = $_POST['idsSup'];
        $uid = rand();
        $sql_statement = "INSERT INTO Users (uid, name ,surname, topic ) VALUES('$uid','$name','$surname', '$topic')";
        $result = mysqli_query($db, $sql_statement);
        header("Location: chats.php?uid=" . $uid);
    }
?>