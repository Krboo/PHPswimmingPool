<?php
$i = 0;
$number = "";
echo "Entrez un nombre: ";
while ($number = trim(fgets(STDIN)))
{
	if (is_numeric($number)) 
	{	
		while ($number[$i])
			$i++;
		$result = $number[$i-1]."\n";
		$i = $number[0] == "-" ? 1 : 0;
		if ($result % 2 == 0)
			echo i == 0 ? "Le chiffre $number est Pair\n" : "Le chiffre $number est Impair\n";
		else
			echo i == 0 ? "Le chiffre $number est Impair\n" : "Le chiffre $number est Pair\n";
			
	}
	else
		echo "'$number' n'est pas un chiffre\n";
	echo "Entrez un nombre: ";
}
?>
