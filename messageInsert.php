<?php
include 'config.php';
$URL = "https://cs-306-project-d2c2f-default-rtdb.firebaseio.com/Chats.json";
function send_msg($msg, $name, $surname, $uid) {
    global $URL;
    $ch = curl_init();
    $msg_json= new stdClass();
    $msg_json->uid = $uid;
    $msg_json->msg = $msg;
    $msg_json->name = $name;
    $msg_json->surname = $surname;
    $msg_json->time = date('H:i');
    $encoded_json_obj = json_encode($msg_json);
    curl_setopt_array($ch, array(
        CURLOPT_URL => $URL,
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array('Content-Type: application/json'), 
        CURLOPT_POSTFIELDS => $encoded_json_obj
    ));
    $response = curl_exec($ch);
    return $response;
}

if(isset($_POST['usermsg'])) {
    $user_msg = $_POST['usermsg'];
    $uid = $_POST['uid'];
        // fetching name

    $uid = preg_replace("/[^0-9]/", "", $uid );

    $sql_statement = "SELECT name, surname FROM users WHERE uid=$uid";
    $result = mysqli_query($db, $sql_statement);
    
    $row = mysqli_fetch_assoc($result);
    if(!empty($name = $row['name'])) {
        $surname = $row['surname'];
        send_msg($user_msg, $name, $surname, $uid);
        header("Location: chats.php?uid=" . $uid);
    }
    else {
        send_msg($user_msg, 'Emir', 'Balkan', $uid);
        header("Location: adminChats.php?uid=" . $uid);
    }   
}   
?>