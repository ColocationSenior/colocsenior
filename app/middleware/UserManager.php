<?php

class UserManager
{
    public static $idUser;
    public static $levelUser;
    public static $builder;

    public static function init(){
        self::$builder = new RequestBuilder();
        if(@isset($_SESSION['user']['idUser'])){
            $key = $_SESSION['user']['idUser'];
            $user = self::getUserByKey($key);
            foreach ($user as $index => $value){
                $_SESSION['user'][$index] = $value;
            }
            self::$levelUser = $_SESSION['user']['levelUser'];
            self::$idUser = $_SESSION['user']['idUser'];

            self::$builder = new RequestBuilder();
            self::$builder->setTable('Organisations');
            self::$builder->addWhere('idUser', "=", $_SESSION['user']['idUser']);
            $organisation = self::$builder->findOne();
            if(@isset($organisation)){
                foreach ($organisation as $index => $value){
                    $_SESSION['organisation'][$index] = $value;
                }
            }
        }
    }
    public static function disconnect(){
        session_destroy();
        self::$idUser = null;
    }
    private static function getUserByKey($key){
        self::$builder->setTable('Users');
        self::$builder->addWhere('idUser', '=', $key);
        $result = self::$builder->findOne();
        self::$builder->cleanBuilder();

        return $result;
    }
    public static function connectUser($login, $password){
        self::$builder = new RequestBuilder();
        self::$builder->setTable('Users');
        self::$builder->addWhere('emailUser', "=", $login);
        self::$builder->addWhere('passwordUser', "=", self::hashMdp($password), 'AND');
        $result = self::$builder->findOne();
        if(@!empty($result)){
            if($result['isConfirmedUser'] == 1){
                foreach ($result as $index => $value){
                    $_SESSION['user'][$index] = $value;
                }
                self::$levelUser = $_SESSION['user']['levelUser'];
                self::$idUser = $_SESSION['user']['idUser'];
                return true;
            }
            else{
                $GLOBALS['view']['notif']['activateAccount'] = 0;
                return false;
            }
        }
        else return false;
    }
    public static function hashMdp($string){
        return hash('sha256', $string.'colocsenior');
    }
}