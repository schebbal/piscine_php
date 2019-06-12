#!/usr/bin/php
<?php
function ft_split($str)
{
    $dst3 = Array();
    $i = 0;
    $array = explode(' ',$str);
    $dst = str_replace(' ',array(), $array);
    asort($dst);
    foreach ($dst as $key => $val) {
        if (!($val == ""))
            $dst3[$i++] = $val;
    }
    return ($dst3);
}

If ($argc > 1)
{
    $array = [];
    foreach (array_slice($argv, 1) as $arg) {
        $array = array_merge($array, explode(' ', implode(' ',ft_split($arg))));
    }
    asort($array);
    foreach (array_slice($array, 0) as $arg)
        echo $arg ."\n";
}
?>