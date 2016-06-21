<?php
session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Panier</title>
	</head>
	<body>
<?php
echo "Le produit a ete ajoute au panier ! actualiser la page pour en ajouter";
if (is_array($_SESSION['basket']) && $_POST)
{
	$added = 0;
	for($i = 0;$_SESSION['basket'][$i]; $i++)
	{
		if($_SESSION['basket'][$i]['panier'] == $_POST['panier'])
		{
			$_SESSION['basket'][$i]['value'] += 1;
			$added = 1;
		}
	}
	echo $added . '<br />';
	if($added === 0)
	{
		echo "non" . '<br />';
		$full['panier'] = $_POST['panier'];
		$full['value'] = 1;
		$_SESSION['basket'][] = $full;
	}
}
else {
	$_SESSION['basket'] = [];
	if ($_POST) {
		$full['panier'] = $_POST['panier'];
		$full['value'] = 1;
		$_SESSION['basket'][] = $full;
	}
}
if (is_array($_SESSION['basket']))
{
	echo "salut";
	for ($j = 0;$_SESSION['basket'][$j]; $j++)
		echo '<div>'. $_SESSION['basket'][$j]['panier'] .' qty = '. $_SESSION['basket'][$j]['value'].' </div>';
}
?>

<a href="prod.php">Retourner a l'accueil</a>
	</body>
</html>
