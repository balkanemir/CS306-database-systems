<html>
    <head>
        <title>Support - Admin</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
</div id='chatbody'> 
<div > 
<div class="chat-box">
    </div>
</div>
</div>
<div class="menu">
            <div class="name">Support - Admin</div>
        </div>
    <ol class="chat">
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
        $msg = isset($chat_msg['msg']) ? $chat_msg['msg'] : 'EMPTY FIELD';
        if ($chat_msg['name'] == "Emir")
            echo  '<li class="self">
            <div class="msg">
                <div class="user">' .  $chat_msg['name'] . '<span class="range admin">Admin</span></div>
            <p>' . $msg . '</p>
            <time>' . $chat_msg['time'] . '</time>
            </div></li>';
        else 
            echo  '<li class="other">
            <div class="msg">
                <div class="user">' .  $chat_msg['name'] . '</div>
            <p>' . $msg . '</p>
            <time>' . $chat_msg['time'] . '</time>
            </div></li>';

    }


    if(isset($_POST['usermsg'])) {
        $user_msg = $_POST['usermsg'];
        send_msg($user_msg, "Emir", 234234);
        echo  '<li class="self">
        <div class="msg">
            <div class="user">' .  $chat_msg['name']. '<span class="range admin">Admin</span></div>
        <p>' . $user_msg . '</p>
        <time>' . $chat_msg['time'] . '</time>
        </div>
    </li>';
    }
?>
    </ol>
<div class="typezone">
<form name="form" method="POST" action="AdminChats.php">
    <input class="inputchat" name="usermsg" type="text" placeholder="Say something"></input>
    <input type="submit" class="send" value=""/>
</form>

    </body>
</html>


