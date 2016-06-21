<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="style/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<header style= background-color:#58D3F7>
		<img src="https://s3-eu-west-1.amazonaws.com/bizquid/site/products/icon_ecommerce.png" alt="buy" width="150" height="150" hspace="5" vspace="5" align="left" /><br/><h1 style="background-image:url(http://www.esho.com/media/wysiwyg/casual_shirts_banner.jpg)">Color Shirts Shop</h1><br/>
<?php
if (!(isset($_SESSION['login'])))
  echo 'Non connecte';
else
  echo 'Bonjour ';echo $_SESSION['login']; echo '!';
?>
		<ul id="menu">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="prod.php">Boutique</a></li>
			<li><a href="panier.php">Panier</a></li>
      <li><a href="">Compte client</a>
      <ul>
      <?php if (!(isset($_SESSION['login']))){?><li><a href="account_creator.php">Inscription</a></li><?php }?>

      <?php if(!(isset($_SESSION['login']))){?><li><a href="connection.php">Connexion</a></li><?php } else { ?> <li><a href="connection.php">Deconnexion</a></li><?php }
if ($_SESSION['admin'] == 1)
  {?><li><a href="admin/admin.php">Administration</a></li><?php }?>
</ul>
</ul>
</header>
</html>
