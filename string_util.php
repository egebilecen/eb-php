<?php

function generate_password($len = 16)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $len);
    return $password;
}

function generate_key($parts = 5)
{
    $key = array();

    for ($i = 0; $i < $parts; $i++) {
        $lower = rand(0, 15);
        $uniq  = strtoupper(sha1(uniqid("", true)));
        $sub   = substr($uniq, $lower, 5);

        array_push($key, $sub);
    }

    $key_str = implode("-", $key);
    return $key_str;
}

?>
