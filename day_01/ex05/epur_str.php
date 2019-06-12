#!/usr/bin/php
<?php
    if ($argc == 2) {
        $tab = array();
        $index = 0;
        $array = explode(' ', $argv[1]);
        $dst = str_replace(' ', array(), $array);
        foreach ($dst as $key => $val) {
            if (!($val == ""))
                $tab[$index++] = $val;
        }
        print(implode(" ", $tab));
	    echo "\n";
    }
?>