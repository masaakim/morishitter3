<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

$tweet = $_POST['tweet'];

if (auth_check()) {
    $lists = $client->get('lists');
    $lists = $lists->lists;
}

$Twig->assign('lists', $lists);
echo $Twig->fetch('list.html');
