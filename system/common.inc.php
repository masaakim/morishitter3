<?php

require_once (dirname(__FILE__) . '/config.inc.php');
require_once(dirname(dirname(__FILE__)) . '/system/twitteroauth/twitteroauth.php');
require_once (constant("SYSTEM_DIR") . '/twig.inc.php');
$Twig = new Twig();

require_once (constant("SYSTEM_DIR") . '/request.inc.php');
$Request = Request::getInstance();

require_once (constant("SYSTEM_DIR") . '/message.inc.php');
$Message = Message::getInstance();

require_once (constant("SYSTEM_DIR") . '/user.inc.php');
$User = User::getInstance();

// Twigの定数設定
$Twig->assign('HTTP_HOST', $_SERVER['HTTP_HOST']);
$Twig->assign('ASSETS_DIR', '../');

define('CONSUMER_KEY', 'H2uI7VbrPZniS7gSrJHROw');
define('CONSUMER_SECRET', 'XdejrdAIDeD3PFxiXBx1s7umeFlbOrCSk5hqyq4aA');

session_start();

function debug() {
    echo "<pre>";
    foreach (func_get_args() as $argv) {
        var_dump($argv);
    }
    echo "</pre>";
}

function auth_check() {
    if (($_SESSION['access_token'] && $_SESSION['access_token_secret'] && $_SESSION['account_name'])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (auth_check() === FALSE) {
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
    $token = $connection->getAccessToken($_GET['oauth_verifier']);
    //debug($token);
    $_SESSION['access_token'] = $token['oauth_token'];
    $_SESSION['access_token_secret'] = $token['oauth_token_secret'];
    
    $twitter_id = $token['user_id'];
    $account_name = $token['screen_name'];
    $_SESSION['account_name'] = $token['screen_name'];
    $_SESSION['twitter_id'] = $token['user_id'];

}
//debug($_SESSION);
if (isset($_SESSION['account_name'])) {
    //session_destroy();
    //debug($twitter_id, $account_name);exit;
    //debug($_SESSION['account_name']);
    if ($User->checkInsert($_SESSION['account_name'])) {
        echo "piyopiyo";
        $User->insert($_SESSION['twitter_id'], $_SESSION['account_name']);
    }
}
if (auth_check() === TRUE) {
  $client = new TwitterOAuth(
    CONSUMER_KEY, CONSUMER_SECRET,
    $_SESSION['access_token'], $_SESSION['access_token_secret']
  );
}

if ($Message->notEmpty()) {
    $Message->alert();
}
