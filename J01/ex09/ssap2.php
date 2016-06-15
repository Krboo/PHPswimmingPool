#!/usr/bin/php
<?PHP

function comp($str1, $str2)
{
	$i = 0;
	while (strtolower($str1[$i]) == strtolower($str2[$i]))
	{
		if (!$str1[$i])
			return (0);
		$i++;
	}
	$c1 = $str1[$i];
	$c2 = $str2[$i];
	if (strtolower($c1) >= 'a' && strtolower($c1) <= 'z')
	{
		if (strtolower($c2) >= 'a' && strtolower($c2) <= 'z')
			if (strtolower($c2) < strtolower($c1))
				return (1);
		return (-1);
	}
	if (strtolower($c2) >= 'a' && strtolower($c2) <= 'z')
		return (1);
	if ($c1 >= '0' && $c1 <= '9')
	{
		if ($c2 >= '0' && $c2 <= '9')
			if ($c2 < $c1)
				return (1);
		return (-1);
	}
	if ($c2 >= '0' && $c2 <= '9')
		return (1);

	if ($c2 < $c1)
		return (1);
	return (-1);
}

$ret = "";

$i = 1;

while ($i < $argc)
{
	$ret .= " $argv[$i] ";
	$i++;
}

	$ret = explode(" ", trim($ret));
	$ret = array_filter($ret);

	usort($ret, comp);

foreach ($ret as $val) {
	echo $val . "\n";
}
?>
