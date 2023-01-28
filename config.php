<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set("Europe/Istanbul");
set_time_limit(0);
session_start();

$db_host = "localhost";
$db_name = "db_name";
$db_user = "root";
$db_pass = "";

try
{
    $db = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // fix int being returned as string
	
    ## CHARSET ##
    $db->query("SET NAMES utf8");
    $db->query("SET CHARACTER SET utf8");
}
catch(PDOException $e)
{
    $data = [
        "code" => -1,
        "data" => array(),
        "text" => "Cannot connect to database!"
    ];

    die(json_encode($data));
}

?>
