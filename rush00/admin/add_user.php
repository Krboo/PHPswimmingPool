<?php

session_start();
require_once("../redirect.php");
$file = json_decode(file_get_contents('../database/db_user.json'), TRUE);
echo $_SESSION['admin'];
if($_SESSION['admin'] !== 1)
	redirect('index.php');
else
{
	if ($_POST['submit'] === "OK")
	{
		if ($_POST['login'] !== "" && $_POST['passwd'] !== "")
		{
			if (!$_POST['passwd'] || !$_POST['login'])
			{
				echo "Veuillez remplir les champs";
			}
			if ($file)
			{
				echo '<pre>';
				var_dump($file);
				echo '</pre>';
				foreach ($file as $key)
				{
					if ($key['login'] == $_POST["login"])
					{
						echo "Erreur login deja utilise";
						exit();
					}
					else {
						$check = 1;
					}
				}
			}
		}
		else {
			echo "Veuillez remplir les champs";
		}
	}
}
echo $check;
if($check = 1)
{
	$user['login'] = $_POST['login'];
	$user['passwd'] = $_POST['passwd'];
	$user['mail'] = $_POST['mail'];
	$user['admin'] = $_POST['admin'];
	$user['id'] = uniqid();
	array_push($file, $user);
	file_put_contents("../database/db_user.json", json_encode($file));
}

 ?>
 <html>
<h1>ADMIN USER </h1>
 <form method="post" action="add_user.php">
 Login: <input type="text" name="login" value=""><br/><br/>
 Passwd: <input type="text" name="passwd" value=""><br/><br/>
 Mail: <input type="text" name="mail" value=""><br/><br/>
 Admin: <input type="number" name="admin" value=0 min="0" max="1">
 <input type="submit" name="submit" value="OK"><br/>
<a href="../prod.php" >Retourner au shop</a>
 </form>
 </html>
