<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="style/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<header>
		<br/><h1>Site E-commerce</h1><br/>
		<ul id="menu">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="boutique.php">Boutique</a></li>
			<li><a href="panier.php">Panier</a></li>
      <li><a href="#">Compte client</a>
      <ul>
      <li><a href="create_acc/account_creator.php">Inscription</a></li>
<?php if($_SESSION['login']!=''){?><li><a href="deconnexion.php">Deconnexion</a></li><?php } else { ?> <li><a href="connexion.php">Connexion</a></li><?php } ?>
</ul></ul>
</header>
</html>
