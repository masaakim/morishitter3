<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

if (auth_check()) {
	$my_profile = $client->get('statuses/user_timeline');
}

if ($_POST['delete']) {
	$delete = $_POST['delete'];
	$result_delete = $client->post("statuses/destroy/$delete");
	$text_delete['deleted'] = 'This tweet has been Deleted.';
	$Message->set('success', '', $text_delete);
	$Message->alert();
}


$Twig->assign('my_profile', $my_profile);
echo $Twig->fetch('profile.html');
