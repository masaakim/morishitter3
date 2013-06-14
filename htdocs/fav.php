<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

if (auth_check()) {
	$my_fav = $client->get('favorites');
}

$Twig->assign('my_fav', $my_fav);
echo $Twig->fetch('fav.html');
