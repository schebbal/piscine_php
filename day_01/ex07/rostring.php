#!/usr/bin/php
<?php
if ($argc > 1) {
    $f_str = array();
    $array = explode(' ', $argv[1]);
    $dst = str_replace(' ', array(), $array);
    $f_str = array_shift($dst);
    print_r(implode(" ", $dst));
    print(" ");
    print($f_str."\n");
}
?>