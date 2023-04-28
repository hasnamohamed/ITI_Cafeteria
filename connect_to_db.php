<?php
class Connect
{
    const DB_USER = "root";
    const DB_PASSWORD = "";
    static function connect_to_db()
    {
        try {
            $dsn = 'mysql:dbname=php_project;host=127.0.0.1;port=3306;';
            $db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
            return $db;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
