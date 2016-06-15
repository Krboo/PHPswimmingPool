<?PHP
if ($argc >= 2)
{
	$chaine = $argv[1];
	$arr = preg_split('/[\s]+/', trim($chaine));
	$i = 1;
	while ($i < count($arr))
	{
		echo "$arr[$i] ";
		$i += 1;
	}
	echo $arr[0]."\n";
}?>
