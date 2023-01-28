<?php

function is_table_exist($table)
{
    global $db;

    try 
    {
        $result = $db->query("SELECT 1 FROM {$table} LIMIT 1");
    } 
    catch (Exception $e) 
    {
        return false;
    }

    return $result !== false;
}

?>
