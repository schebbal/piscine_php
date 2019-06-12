#!/usr/bin/php
<?php
	while (!feof(STDIN)) {
        echo "Entez un nombre: ";
        $nbr = trim(fgets(STDIN));
        if (feof(STDIN)) {
            echo "\n";
            break;
        }
        if (is_numeric($nbr)) {
            if ($nbr % 2 == 0)
                echo "Le chiffre " . $nbr . " est Pair\n";
            else
                echo "Le chiffre " . $nbr . " est Impair\n";
        } else
            echo "'" . $nbr . "' n'est pas un chiffre\n";
	}
?>
