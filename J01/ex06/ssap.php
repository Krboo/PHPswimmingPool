<?PHP
if ($argc >= 2)
{	$chaine = "";
	foreach ($argv as $elem)
	{
		if ($elem != $argv[0])
			$chaine .= " $elem ";
	}
	$arr = preg_split('/[\s]+/', trim($chaine));
	$ret = "";
	sort($arr);
	foreach($arr as $word)
		echo $word."\n";
}?>
