<?php
	$ret = "";
        if ($argc == 2)
{	
		$chaine = $argv[1];
        	$arr = preg_split('/[\s]+/', trim($chaine));
        	foreach($arr as $word)
		$ret .= "$word ";
       		trim($ret);
       		if ($ret)
		echo $ret."\n";
}
?>
