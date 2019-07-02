<?php

class Config{
    #外からnewの禁止
    protected function __construct(){ 
    }
    #cloneの禁止
    protected function __clone(){
    }
    #
    protected function __wakeup(){
    }
    public static function getAll(){
        static $conf =null;
        if(null === $conf){
            $conf = require(BASEPATH. "/config.php");
            $conf += require(BASEPATH. "/environment_config.php");
        }
        return $conf;
    }
    
}