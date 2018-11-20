<?php
require '../vendor/autoload.php';

class AccesoDB{
    private static $db;

    private function __construct(){}

    static function getConnection(){
        $connection=new MongoDB\Client("mongodb://rockydba:rockydba@cluster1-shard-00-00-siwst.mongodb.net:27017,
        cluster1-shard-00-01-siwst.mongodb.net:27017,cluster1-shard-00-02-siwst.mongodb.net:27017/test?ssl=true&
        replicaSet=Cluster1-shard-0&authSource=admin&retryWrites=true");
        //$connection=new MongoDB\Client("mongodb://localhost:27017");
        $db=$connection->rockyBD;
        return $db;
    }
}
        