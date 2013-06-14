<?php

$id = $_GET['id'];
$name = $_GET['name'];

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
if (auth_check) {
	$remove = $client->post('friendships/destroy',
	                        array('user_id'=>$id, 'screen_name'=>$name));
        $text_remove['followed'] = "You have removed @$name.";
        $Message->set('danger', '', $text_remove);
        $Message->alert();
}

//$Twig->assign('remove', $remove);
echo $Twig->fetch('remove.html');
