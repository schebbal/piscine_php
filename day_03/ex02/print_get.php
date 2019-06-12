<?php
/**
 * Created by PhpStorm.
 * User: schebbal
 * Date: 2019-01-24
 * Time: 09:44
 */
$var = $_GET;
foreach ($var as $elem => $value) {
    echo $elem;
    echo " : ";
    echo $value;
    echo "\n";
}
?>