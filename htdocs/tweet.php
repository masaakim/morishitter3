<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

$tweet = $_POST['tweet'];

if (auth_check()) {
  if ($_GET["oauth_token"]) {
    $jump = "http://morishitter.ikaasam.com/tweet";
    header("Location: $jump");
  }

  $param = array("count" => 50);
  $data = $client->get('statuses/home_timeline', $param);

  if ($_POST['Fav_Attack']) {
    for($i = 0; $i < 10; $i++){
      $latest_10_id = $data[$i]->id_str;
      $client->post("favorites/create/$latest_10_id");
    }
    $text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
    $Message->set('warning', '', $text_attack);
    $Message->alert();
  }

  if ($_POST['tweet']) {
    $params = array('status' =>  $tweet);
    $result = $client->post('statuses/update', $params);
    if (isset($result)) {
      $text['success'] = 'Your tweet has been sent.';    
      $Message->set('info', '', $text);
      $Message->alert();
    }
  } 
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

if (array_key_exists('more', $_POST)) {
  $more = $_POST['more'];
  $last = end($data);
  $param2 = array("max_id" => $last->id, "count" => 50);
  $next_data = $client->get('statuses/home_timeline', $param2);
  foreach ($next_data as $next) {
    $data[] = $next;
  }
}

$Twig->assign('data', $data);
echo $Twig->fetch('tweet.html');
