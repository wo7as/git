<?php
class Db
{
    public static $db = false;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $base = 'test';
    private $type = 'mysql';

    function __construct()
    {
        if(self::$db == false)
        {
            $this->connect();
        }
    }
    private function connect()
    {
    $dsn = $this->type .":dbname=" . $this->base . ";host=" . $this->host;
        try
        {
            self::$db = new PDO($dsn,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        }
        catch(PDOException $e)
        {
            echo "Database error";
        }
    }
}
