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
				redirect('connection/connection.php');
			}
			if ($file)
			{
				foreach ($file as $key)
				{
					if($key->login == $_POST['login'])
					{
						$_SESSION['login'] = $key->login;
						echo "Vous etes connecte !";
						redirect('admin/admin.php');
						exit();
					}
					else
				 	{
						echo "Mauvais login";
						redirect('connection/connection.php');
					}
				}
			}
}
echo "Veuillez remplir les champs";
redirect('connection/connection.php');
}
}
 ?>

 <link href="../style/style.css" type="text/css" rel="stylesheet"/>
 <h1>Connection</h1>
 <form action="" method="post">
 	Identifiant: <input type="text" name="login"/><br/>
 	Mot-de-passe: <input type="password" name="passwd"/><br/>
 	<input type="submit" name="submit" value="OK"/>
