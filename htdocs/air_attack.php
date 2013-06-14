<?php

require_once(dirname(dirname(__FILE__)) . '/system/common.inc.php');

if (auth_check()) {
    if ($_POST/*['Air_Fav_Attack']*/) {
        //var_dump($_POST);
        $air_fav_count = $_POST['air_fav_count'];
        //var_dump($air_fav_count);
        if (0 < $air_fav_count && $air_fav_attack <= 100) {
            $others_id_air = $_POST['Air_Fav_Attack'];
            //var_dump($others_id_air);exit;
            $others2_air = $client->get('statuses/user_timeline', array('user_id'=>$others_id_air, 'count'=>101));
            //var_dump($air_fav_count);exit;
            for($i = 0; $i < $air_fav_count; $i++){
                $latest_15_id = $others2_air[$i]->id_str;
                $client->post("favorites/create/$latest_15_id");
                $client->post("favorites/destroy/$latest_15_id");
            }
            $text_attack_air['attack_success'] = '!!!!! Air Fav Attack !!!!!';
            $Message->set('success', '', $text_attack_air);
            $Message->alert();
        } else {
            $text_error['error'] = 'input the number between 1 and 100';
            $Message->set('error', '', $text_error);
            $Message->alert();
        }
    }
}

echo $Twig->fetch('attack.html');

