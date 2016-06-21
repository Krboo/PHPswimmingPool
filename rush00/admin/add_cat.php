<?php

session_start();
require_once("../redirect.php");
$file = json_decode(file_get_contents('../database/db_prod.json'));
if($_SESSION['admin'] !== 1)
	redirect('index.php');
else
{
	if($_POST['submit'] === "OK")
	{
		if($_POST['nom'] !== "" && $_POST['img'] !== "" && $_POST['price'] !== "")
		{
			$prod = [];
			$prod['name'] = $_POST['name'];
			$prod['price'] = $_POST['price'];
			$prod['img'] = $_POST['img'];
			$prod['size'] = $_POST['size'];
			$prod['color'] = $_POST['color'];
			$prod['id'] = uniqid();
			array_push($file, $prod);
			file_put_contents("../database/db_prod.json", json_encode($file));
		}
		else {
			echo "That's empty.";
		}
	}
}

 ?>
 <html>
<h1>ADMIN PRODUIT </h1>
 <form method="post" action="add_cat.php">
 Nom: <input type="text" name="name" value=""><br/><br/>
 Prix: <input type="number" name="price" value="prix"><br/><br/>
 Img: <input type="text" name="img" value=""><br/><br/>
 Taille: <input type="radio" name="size" value="S" checked> Small
  <input type="radio" name="size" value="Large"> Large
  <input type="radio" name="size" value="Fat"> Fat<br/><br/>
 Couleur:<input type="radio" name="color" value="blue" checked> Blue
  <input type="radio" name="color" value="red"> Red
  <input type="radio" name="color" value="green"> Green<br/><br/>
 <input type="submit" name="submit" value="OK"><br/>


<a href="../prod.php" >Retourner au shop</a>
 </form>
 </html>
