#!/usr/bin/php
<?PHP
if ($argc == 4)
{
  $expr = trim($argv[1]).trim($argv[2]).trim($argv[3]);
  $res = eval('return '.($expr).';');
  echo $res;
}
else
  echo "Incorrect Parameters";
echo "\n";
?>
