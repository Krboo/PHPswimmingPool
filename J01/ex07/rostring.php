#!/usr/bin/php
<?PHP
if ($argc >= 2)
{
	$chaine = $argv[1];
	$arr = array_filter(explode(" ", trim($chaine)));
	$i = 1;
	while ($i < count($arr))
	{
		echo "$arr[$i] ";
		$i += 1;
	}
	echo $arr[0]."\n";
}
?>
