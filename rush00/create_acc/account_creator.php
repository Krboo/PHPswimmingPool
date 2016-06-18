<?php
require_once("../redirect.php");
session_start();
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$admin = $_POST['admin'];
$file = json_decode(file_get_contents('../database/db_user.json'));
$_SESSION['login'] = NULL;
if(isset($_SESSION['login']))
{
	redirect('../index.php');
}
else
{
	if ($_POST['submit'] === "OK")
	{
		if ($_POST['login'] !== "" && $_POST['passwd'] !== "")
		{
			$fresh['login'] = $_POST['login'];
			if (!$_POST['passwd'] || !$_POST['login'])
			{
				echo "Veuillez remplir les champs";
				//redirect('index.php');
			}
			if ($file)
			{
				foreach ($file as $key)
				{
					if ($key->login == $_POST["login"])
					{
						echo "Erreur login deja utilise";
						//redirect('connection/index.php');
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
			//redirect('index.php');
		}
	}
}
if($check == 1)
{
	if($admin === "coca")
	{
		$user['login'] = $_POST['login'];
		$user['passwd'] = $_POST['passwd'];
		$user['mail'] = $_POST['mail'];
		$user['admin'] = 1;
		$tab[] = $user;
		$tab[] = $file;
		file_put_contents("../database/db_user.json", json_encode($tab));
		header('Location: http://google.fr');
	}
	else
	{
		$user['login'] = $_POST['login'];
		$user['passwd'] = $_POST['passwd'];
		$user['mail'] = $_POST['mail'];
		$user['admin'] = 2;
		$tab[] = $user;
		$tab[] = $file;
		file_put_contents("../database/db_user.json", json_encode($tab));
		header('Location: http://www.42.fr');
	}
}
?>

 <link href="../style/style.css" type="text/css" rel="stylesheet"/>
 <h1>Connection</h1>
 <form action="" method="post">
 	Identifiant: <input type="text" name="login"/><br/>
 	Mot-de-passe: <input type="password" name="passwd"/><br/>
	E-mail: <input type="text" name="mail"/><br/>
	Admin: <input type="password" name="admin"/><br/>
 	<input type="submit" name="submit" value="OK"/>
