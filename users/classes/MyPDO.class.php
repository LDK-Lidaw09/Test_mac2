<?php 
class MyPDO extends PDO{
    private const SERVER = "localhost";
    private const USER = "mac2";
    private const PWD = "passer";
    private const DB =  "test_mac";
    private const DSN = "mysql:host=".self::SERVER.";dbname=".self::DB.";charset=utf8";
    private static $instance;

    protected function __clone(){
    return new Exception('Le clonage est interdit');
    }

    public static function  getInstance(){
        if(!self::$instance){
            try {
                self::$instance  = new MyPDO(self::DSN,self::USER,self::PWD,array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ));
            } catch (PDOException $e) {
              die("Erreur connexion:".$e->getMessage());
            }
        }
        return self::$instance;
    }
}