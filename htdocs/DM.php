<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
if (auth_check()) {
    $DM = $client->get('direct_messages');

}

$Twig->assign('DM', $DM);
echo $Twig->fetch('DM.html');
