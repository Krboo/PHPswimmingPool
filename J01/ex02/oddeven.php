#!/usr/bin/php
<?php
$i = 0;
echo "Entrez un nombre: ";
while ($number = fgets(STDIN))
{
  $number = trim($number);
  if (is_numeric($number))
  {
		while ($number[$i])
      $i++;
    $result = $number[$i-1];
    $result = substr($number, -1)."\n";
		if ($result % 2 == 0)
			echo "Le chiffre $number est Pair\n";
		else
			echo "Le chiffre $number est Impair\n";
	}
	else
		echo "'$number' n'est pas un chiffre\n";
	echo "Entrez un nombre: ";
}
  echo "^D\n";
?>
