<?php

class Master_Model
{
    public static function get_all_from($table)
    {
        $db =  Database::connect();
        $sql = "SELECT * FROM $table";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $result;
    }

    public static function delete($table,$collum,$value)
    {
        $db = Database::connect();
        $sql = "DELETE FROM $table WHERE $collum = ':value'";
        $stmt->bindParam($sql);
    }
 }

?>