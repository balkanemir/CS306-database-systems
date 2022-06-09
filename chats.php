<?php
    $URL = "https://cs-306-project-d2c2f-default-rtdb.firebaseio.com/Chats.json";
    function get_messages() {
        global $URL;
        $ch = curl_init();
        curl_setopt_array($ch, [ 
            CURLOPT_URL => $URL,
            CURLOPT_POST => false,
            CURLOPT_RETURNTRANSFER => true, 
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    function send_msg($msg, $name, $time) {
        global $URL;
        $ch = curl_init();
        $msg_json= new stdClass();
        $msg_json->msg = $msg;
        $msg_json->name = $name;
        $msg_json->time = date('H:i');
        $encoded_json_obj = json_encode($msg_json);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $URL,
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array('Content-Type: application/json'), CURLOPT_POSTFIELDS => $encoded_json_obj
        ));
        $response = curl_exec($ch);
        return $response;
    }

    $msg_res_json = get_messages();
    $keys = array_keys($msg_res_json);
    for ($i = 0; $i < count($keys); $i++) {
        $chat_msg = $msg_res_json[$keys[$i]];
        echo $chat_msg['name'] . "<br>";
        $msg = isset($chat_msg['msg']) ? $chat_msg['msg'] : 'EMPTY FIELD';
        echo $msg . "<br>";
    }


    if(isset($_POST['usermsg'])) {
        $user_msg = $_POST['usermsg'];
        send_msg($user_msg, "Guest", 234234);
        echo $user_msg;
    }
?>

<form name="form" method="POST" action="chats.php">
    <input name="usermsg" class="testarea"  placeholder="Type here!" type="text">
    <button>Submit</button>
</form>