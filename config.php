<?php

date_default_timezone_set("Europe/Istanbul");
set_time_limit(0);
session_start();

$db_host = 'localhost';
$db_name = 'db_name';
$db_user = 'root';
$db_pass = '';

try
{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
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

function redirect($page)
{
    header("Location: ".$page);
}

function print_json($data)
{
    echo json_encode($data);
}

function return_json($data)
{
    die(print_json($data));
}

function debug_var($var)
{
    var_dump($var);
    die();
}

?>
