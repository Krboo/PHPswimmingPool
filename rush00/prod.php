<?php
require_once("includes/header.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
<?PHP
	$file = json_decode(file_get_contents('database/db_prod.json'), TRUE);
  foreach ($file as $key => $value) {
		if(isset($_POST['blue']))
		{
			if($value['color'] == "blue" || $value['color'] == 'other')
			{
				echo '<img class="miniature" src="' . $value["img"] .  '" alt="img"  height="400px" width="400px"/>';
		  	echo '<form method="post" action="add_cart.php"><input type="submit" name="panier" value="ajouter au panier"></form>';
			}
		}
		else if(isset($_POST['green']))
		{
			if($value['color'] == 'green' || $value['color'] == 'other')
			{
				echo '<img class="miniature" src="' . $value["img"] .  '" alt="img"  height="400px" width="400px"/>';
				echo '<form method="post" action="add_cart.php"><input type="submit" name="panier" value="ajouter au panier"></form>';
			}

		}
		else if(isset($_POST['red']))
		{
			if($value['color'] == "red" || $value['color'] == 'other')
			{
				echo '<img class="miniature" src="' . $value["img"] .  '" alt="img"  height="400px" width="400px"/>';
				echo '<form method="post" action="add_cart.php"><input type="submit" name="panier" value="ajouter au panier"></form>';
			}

		}
	}
 ?>
<body>
  	<form method="post" action="prod.php">
  	Chemise bleue: <input type="submit" name="blue" value="blue">
	  Chemise rouge: <input type="submit" name="red" value="red">
  	Chemise verte: <input type="submit" name="green" value="green">
  	</form>
	</body>
</html>

<?php
?>
