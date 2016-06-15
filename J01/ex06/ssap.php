#!/usr/bin/php
<?PHP
if ($argc >= 2)
{
$chaine = "";
foreach ($argv as $elem)
{
  if ($elem != $argv[0])
      $chaine .= " $elem ";
}
$arr = array_filter(explode(" ", trim($chaine)));
$ret = "";
sort($arr);
foreach($arr as $word)
	echo $word."\n";
}
?>
