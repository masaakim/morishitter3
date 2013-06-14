<?php

require_once ('database.inc.php');

class User
{
    private static $__instance = NULL;

    public static function getInstance() 
    {
        if (self::$__instance === NULL) {
            self::$__instance = new self();
        }

        return self::$__instance;
    }

    private function __construct()
    {
    } 

    public function insert($twitter_id, $account_name) 
    {
        var_dump($twitter_id, $account_name);
        //exit;
        $now = date('Y-m-d H:i:s');
        $db = Database::getInstance();
        $param = array('twitter_id' => $twitter_id, 'account_name' => $account_name, 'created' => $now, 'modified' => $now);
        $sql = "INSERT INTO `users` (`twitter_id`, `account_name`, `created`, `modified`) VALUES (:twitter_id, :account_name, :created, :modified)";
        $dbres = $db->query($sql, $param);
    }

    public function getByAccountName($account_name) 
    {
        $db = Database::getInstance();
        $sql = "SELECT * FROM `users` WHERE `account_name` = :account_name";
        $dbres = $db->query($sql, array('account_name' => $account_name));
        $dbret = $dbres->fetch();
        if (!$dbret) {
            return FALSE;
        }
        return $dbret;
    }

    public function checkInsert($account_name) 
    {
        //var_dump($account_name);
        $db = Database::getInstance();
        $sql = "SELECT * FROM `users` WHERE `account_name` = :account_name";
        $dbres = $db->query($sql, array('account_name' => $account_name));
        $dbret = $dbres->fetch();
        if (!$dbret) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getUserIdByAccountName($account_name)
    {
        $db = Database::getInstance();
        $sql = "SELECT * FROM `users` WHERE `account_name` = :account_name";
        $dbres = $db->query($sql, array('account_name' => $account_name));
        $dbret = $dbres->fetch();
        if (!$dbres) {
            return false;
        }
        return $dbret['id'];
    }

}

