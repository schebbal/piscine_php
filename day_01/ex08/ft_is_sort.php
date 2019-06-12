<?php
function ft_is_sort($array1)
{
    $array2 = $array1;
    sort($array2);
    return ($array1 == $array2);
}
?>