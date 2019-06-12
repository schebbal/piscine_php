<?php
/**
 * Created by PhpStorm.
 * User: schebbal
 * Date: 2019-01-24
 * Time: 09:44
 */
if (isset($_GET["action"]) && isset($_GET["name"]))
{
    if ($_GET["action"] == "del")
        setcookie($_GET["name"], NULL, -1);
    elseif ($_GET["action"] == "set") {
        setcookie($_GET["name"], $_GET["value"], time() + 3600);
    }
    elseif ($_GET["action"] == "get") {
        if (isset($_COOKIE[$_GET["name"]]))
            echo $_COOKIE[$_GET["name"]];
        if (isset($_COOKIE[$_GET["name"]]))
            echo "\n";
    }
}
?>