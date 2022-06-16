<?php
    include "config.php";
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $topic = $_POST['idsSup'];
        $uid = rand();
        $aid = rand();
        $sql_statement = "INSERT INTO Users (uid, name ,surname, topic, adminId ) VALUES('$uid','$name','$surname', '$topic', '$aid')";
        $result = mysqli_query($db, $sql_statement);
        header("Location: chats.php?uid=" . $uid);
    }
?>