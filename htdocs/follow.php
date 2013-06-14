<?php

$id = $_GET['id'];
$name = $_GET['name'];

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

if (auth_check) {
    $client = new TwitterOAuth(
        CONSUMER_KEY, CONSUMER_SECRET,
        $_SESSION['access_token'], $_SESSION['access_token_secret']
    );
    $follow = $client->post('friendships/create',
                            array('user_id'=>$id, 'screen_name'=>$name));
    $text_follow['followed'] = "You have followed @$name.";
    $Message->set('info', '', $text_follow);
    $Message->alert();
}

echo $Twig->fetch('follow.html');
