<?php
	session_start();
$user = 'alban';
$passwd = 'alban';

if(isset($_POST['submit']))
{
	$login = $_POST['login'];
	$pass = $_POST['passwd'];
	if($login && $pass)
	{
		echo $_SESSION['name'];
		if($login == $user && $pass == $passwd)
		{
			$_SESSION['name'] = $login;

			header('Location: admin.php');
		}
		else
			echo "Identifiants errones";
	}
else
	echo "veuillez remplir les champs";
}


 ?>
<link href="../style/style.css" type="text/css" rel="stylesheet"/>
<h1>Panel Admin</h1>
<form action="" method="post">
	Identifiant: <input type="text" name="login"/><br/>
	Mot-de-passe: <input type="password" name="passwd"/><br/>
	<input type="submit" name="submit"/>
