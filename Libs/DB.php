<?php

$dbh = DB::getHandle();

require_once(BASEPATH . '/Libs/Config.php');

class DB {
    public static function getHandle(){
        static $dbh = null;
        if(null === $dbh){
            try{
                $conf = Config::getAll();
                $dbname = $conf['DB']['dbname'];
                $host =$conf['DB']['host'];
                $user = $conf['DB']['user'];
                $pass = $conf['DB']['pass'];
                $dsn = "mysql:dbname={$dbname};host={$host};charset=utf8mb4";
                $option = [
                    #静的プレースフォルダを指定
                    PDO::ATTR_EMULATE_PREPARES => false,
                    #複文実行の禁止
                    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
                ];

                $dbh = new PDO($dsn,$user,$pass,$option);
            }catch (PDOExeption $e){
                echo $e->getMessage();
                exit;
            }
        }
        return $dbh;
    }
}
















