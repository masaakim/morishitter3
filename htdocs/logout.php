<?php

require_once (dirname(dirname(__FILE__)) . '/system/common.inc.php');

session_destroy();
$jump = "http://morishitter.ikaasam.com";
header("Location: $jump");

