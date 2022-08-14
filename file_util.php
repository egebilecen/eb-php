<?php

function write_to_file($file, $content, $mode="a")
{
    $handle = fopen($file, $mode);

    if(!$handle)                  return  0;
    if(fwrite($handle, $content)) return -1;

    fclose($handle);
    return 1;
}

function write_log($file, $severity, $text)
{
    WriteToFile($file, "[".date("Y-m-d H:i:s")."][".$severity."] ".$text."\n");
}

?>
