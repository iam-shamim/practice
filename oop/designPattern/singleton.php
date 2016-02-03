<?php
class Singleton{
    static $instance;
    private function __construct(){

    }
    private function __clone(){
        echo 'Clone';
    }
    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance=new Singleton();
        }
        return self::$instance;

    }
    private function  __wakeup(){

    }
}

$obj=Singleton::getInstance();





