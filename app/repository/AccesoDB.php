<?php
require '../vendor/autoload.php';

class AccesoDB{
    private static $db;

    private function __construct(){}

    static function getConnection(){
        $connection=new MongoDB\Client("mongodb+srv://rockydba:rockydba@cluster1-siwst.mongodb.net/rockyDB?retryWrites=true&w=majority");
        //$connection=new MongoDB\Client("mongodb://localhost:27017");
        $db=$connection->rockyBD;
        return $db;
    }
}
        
