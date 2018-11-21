<?php
$dbcon = null;

function IsConnectionEstablished()
{
    global $dbcon;
    return is_resource($dbcon) && get_resource_type($dbcon)==='mysql link';
}

function OpenDb()
{
    global $dbcon;
    if (!$dbcon) {
        $dbname = $GLOBALS["db"]["dbname"];
        $username = $GLOBALS["db"]["username"];
        $password = $GLOBALS["db"]["password"];
        $host = $GLOBALS["db"]["host"];

        $dbcon = mysqli_connect($host, $username, $password);
        mysqli_select_db($dbcon, $dbname);
    }
    return $dbcon;
}

function CloseDb()
{
    global $dbcon;
    mysqli_close($dbcon);
}
?>