<?php
class DBConnection{
    protected static $db;
    private function __construct() {
        try {
            $host = "localhost";
            $user = "root";
            $pass = "";
        self::$db = $sql=new mysqli($host,$user,$pass);
        }
        catch (Exception $e) {
            echo $e;
        }
    }
    public static function getInstance() {
        if (!self::$db) {
            new DBConnection();
        }
        return self::$db;
    }

    public function __destruct() {
        $db=NULL;
    }
}
?>