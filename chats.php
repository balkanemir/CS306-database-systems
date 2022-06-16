<html>
    <head>
        <title>Support</title>
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
            <div class="name">Support</div>
        </div>
    <ol class="chat">
    <?php
    include "config.php";
    header("refresh: 60");

    $uid = $_REQUEST['uid'];

    // fetching name
    $sql_statement = "SELECT name FROM users WHERE uid=$uid";
    $result = mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
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

    $msg_res_json = get_messages();

    $keys = array_keys($msg_res_json);
    for ($i = 0; $i < count($keys); $i++) {
        $chat_msg = $msg_res_json[$keys[$i]];
        $msg = isset($chat_msg['msg']) ? $chat_msg['msg'] : 'EMPTY FIELD';
        if ($chat_msg['name'] == $name)
            echo  '<li class="self">
            <div class="msg">
                <div class="user">' .  $chat_msg['name'] . '</div>
            <p>' . $msg . '</p>
            <time>' . $chat_msg['time'] . '</time>
            </div></li>';
        else 
            echo  '<li class="other">
            <div class="msg">
                <div class="user">' .  $chat_msg['name'] . '<span class="range admin">Admin</span></div>
            <p>' . $msg . '</p>
            <time>' . $chat_msg['time'] . '</time>
            </div></li>';
    }

    echo '</ol>
    <div class="typezone">
    <form name="form" method="POST" action="messageInsert.php">
        <input class="inputchat" name="usermsg" type="text" placeholder="Say something"></input>
        <input type="submit" class="send" value=""/>
        <input name="uid" type="hidden" value=' . $uid . '/></form>';
?>


    </body>
</html>


