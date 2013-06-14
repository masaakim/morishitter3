<?php

define('PROJECT_ROOT_DIR', dirname(dirname(__FILE__)));
define('SYSTEM_DIR',       constant("PROJECT_ROOT_DIR") . '/system');
define('LIB_DIR',          constant("PROJECT_ROOT_DIR") . '/lib');
define('VAR_DIR',          constant("PROJECT_ROOT_DIR") . '/var');
define('BIN_DIR',          constant("PROJECT_ROOT_DIR") . '/bin');
define('CACHE_DIR',        constant("VAR_DIR") . '/cache');

define("DATABASE_DBNAME", "");
define("DATABASE_HOST", "");
define("DATABASE_USER", "");
define("DATABASE_PASSWORD", "");

define('TWIG_CACHE_DIR', constant("CACHE_DIR") . '/Twig');
define('TWIG_TEMPLATE_DIR', constant("PROJECT_ROOT_DIR") . '/templates');


ini_set('display_errors', 'On');
error_reporting(E_ALL & ~E_NOTICE);
