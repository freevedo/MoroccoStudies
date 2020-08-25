<?php

 class Database
    {
        private static $dbHost = "localhost";
        private static $dbName = "kenitra";
        private static $dbUsername = "root";
        private static $dbUserpassword = "";

        private static $connection = null;

        public static function connect()
        {
            if(self::$connection == null)
            {
                try
                {
                  self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
                }
                catch(PDOException $e)
                {
                    die($e->getMessage());
                }
            }
            return self::$connection;
        }

        public static function disconnect()
        {
            self::$connection = null;
        }

    }
// PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8";
// PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8";
?>
