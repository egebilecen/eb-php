<?php

function format_as_mysql_date($date)
{
    $formatted_str = "";
    $date_split    = explode(" ", $date);
    $year_week_day = explode("-", $date_split[0]);
    $hour_min_sec  = explode(":", $date_split[1]);

    $formatted_str .= $year_week_day[2] . "/" . $year_week_day[1] . "/" . $year_week_day[0];
    $formatted_str .= ", ";
    $formatted_str .= $hour_min_sec[0] . ":" . $hour_min_sec[1];

    return $formatted_str;
}

function format_as_mysql_date_without_hour($date)
{
    $formatted_str = "";
    $date_split    = explode(" ", $date);
    $year_week_day = explode("-", $date_split[0]);

    $formatted_str .= $year_week_day[2] . "/" . $year_week_day[1] . "/" . $year_week_day[0];

    return $formatted_str;
}

function redirect($page)
{
    header("Location: ".$page);
    exit();
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
    exit();
}

?>
