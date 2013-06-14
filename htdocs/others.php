<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

$tweet = $_POST['tweet'];

if (auth_check()) {
	$user_id = $_GET['id'];

	$others = $client->get('statuses/user_timeline', array('screen_name'=>$user_id, 'count'=>50));
	
	if ($_POST['tweet']) {
		$params = array('status' => $tweet);
		$result = $client->post('statuses/update', $params);
		if ($result) {
			$text['success'] = 'Your tweet has been sent.';    
			$Message->set('info', '', $text);
			$Message->alert();
		}
	}
}

if ($_POST['Fav_Attack']) {
	
	$others_name = $_POST['Fav_Attack'];
	
	$others2 = $client->get('statuses/user_timeline', array('user_id'=>$others_neme, 'count'=>15));

	for($i = 0; $i < 15; $i++){
		$latest_15_id = $others2[$i]->id_str;
		$client->post("favorites/create/$latest_15_id");
	}
	$text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
	$Message->set('warning', '', $text_attack);
	$Message->alert();
}


if ($_POST['reply']) {
	$reply = $_POST['reply'];
	$reply_fav = $_POST['reply_fav'];
	$fav_reply = $client->post("favorites/create/$reply_fav");
	$Twig->assign('reply', $reply);
}

if ($_POST['fav']) {
	$fav = $_POST['fav'];
	$result_fav = $client->post("favorites/create/$fav");

	$text_fav['fav_success'] = 'Add to your Favorites.';
	$Message->set('warning', '', $text_fav);
	$Message->alert();
}


if ($_POST['RT']) {
	$RT = $_POST['RT'];
	$client->post("favorites/create/$RT");
	$result_RT = $client->post("statuses/retweet/$RT");

	$text_RT['RT_success'] = 'This tweet has been Retweeted.';
	$Message->set('success', '', $text_RT);
	$Message->alert();
}


$Twig->assign('others', $others);
echo $Twig->fetch('others.html');
