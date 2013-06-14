<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');
if (auth_check()) {
    $client = new TwitterOAuth(
        CONSUMER_KEY, CONSUMER_SECRET,
        $_SESSION['access_token'], $_SESSION['access_token_secret']
    );

    if ($_POST/*['Fav_Attack']*/) {
        //var_dump($_POST);
        $fav_count = $_POST['fav_count'];
        //var_dump($fav_count);
        if (0 < $fav_count && $fav_count <= 100) {
            $others_id_fav = $_POST['Fav_Attack'];
            //var_dump($others_id_fav);exit;
            $others2_fav = $client->get('statuses/user_timeline', array('user_id'=>$others_id_fav, 'count'=>101));

            for ($i = 0; $i < $fav_count; $i++) {
                $latest_15_id = $others2_fav[$i]->id_str;
                $client->post("favorites/create/$latest_15_id");
            }
            $text_attack['attack_success'] = '!!!!! Fav Attack !!!!!';
            $Message->set('warning', '', $text_attack);
            $Message->alert();
        } else {
            $text_error['error'] = 'Notice : input the number between 1 and 100';
            $Message->set('error', '', $text_error);
            $Message->alert();
        }
    }
}

echo $Twig->fetch('attack.html');
