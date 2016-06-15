#!/usr/bin/php
<?php
$ret = "";
if ($argc == 2)
{
		$chaine = $argv[1];
  	$arr = array_filter(explode(" ", trim($chaine)));
   	foreach($arr as $word)
      $ret .= "$word ";
    trim($ret);
    if ($ret)
		echo $ret."\n";
}
?>
