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
 ?>
 