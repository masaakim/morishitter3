<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
if (auth_check()) {
    $DM_sent = $client->get('direct_messages/sent');
}

$Twig->assign('DM_sent', $DM_sent);
echo $Twig->fetch('DM_sent.html');
