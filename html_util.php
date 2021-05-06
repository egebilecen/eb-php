<?php

function js_redirect_to($url, $delay_ms=0)
{
    $path = explode("/", $_SERVER["REQUEST_URI"]);
    unset($path[count($path) - 1]);
    $path = implode("/", $path);

    echo "<script>setTimeout(function(){window.location='".$path."/".$url."'}, ".$delay.");</script>";
    die();
}

function js_redirect_back($delay_ms = null)
{
    if(!is_numeric($delay_ms)) $delay_ms = 0;
    
    echo '
        <script>
            setTimeout(function(){
                window.history.back();
            },'; echo $delay_ms; echo ');
        </script>
    ';
    die();
}

?>
