<?php

function p($key, $trim=true)
{
    $data = $_POST[$key];
    
    if($trim) $data = trim($data);

    return $data;
}

function g($key, $trim=true)
{
    $data = $_GET[$key];
    
    if($trim) $data = trim($data);

    return $data;
}

function r($key, $trim=true)
{
    $data = p($key, $trim);

    if($data == NULL) return g($key, $trim);

    return $data;
}

?>