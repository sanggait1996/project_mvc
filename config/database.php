<?php
class Database
{
    public static $db;
    private static $dns = "mysql:host=localhost; dbname=demo_mvc";
    private static $username = "root";
    private static $password  ="123456";

    public static function connect ()
    {
        if (!isset(self::$db))
        {
            try
            {
                self::$db = new PDO(self::$dns, self::$username, self::$password);
                self::$db->exec('set name ut8');
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }
            return self::$db;
        }
    }
}
?>