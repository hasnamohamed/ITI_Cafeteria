<?php
class roomNumController
{
    public $DB_HOST = "";
    public  $DB_USER = "";
    public  $DB_PASSWORD = "";
    public $DB_DATABASE = "";
    public $port = "";

    function __construct($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $PORT = 3306)
    {
        $this->DB_HOST = $DB_HOST;
        $this->DB_USER = $DB_USER;
        $this->DB_PASSWORD = $DB_PASSWORD;
        $this->DB_DATABASE = $DB_NAME;
        $this->port = $PORT;
    }
    public function connectto_db()
    {
        try {
            $dsn  = "mysql:host={$this->DB_HOST};port={$this->port};dbname={$this->DB_DATABASE}";
            $db = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
            return $db;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    //============select all========================
    public function SelectfromTable($connection, $table)
    {
        try {
            $select_query = "Select* from $table";
            $stmt = $connection->prepare($select_query);
            $res = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //====================insert========================
    public function insertInto($connection, $table, $number)
    {
        try {
            $query = "Insert INTO `$table` (`number`) Values(:number)";
            $stmt = $connection->prepare($query);
            $stmt->bindParam(":number", $number, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
