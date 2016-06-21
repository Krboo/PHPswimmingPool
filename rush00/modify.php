<?php
$file = json_decode(file_get_contents('database/db_user.json'), TRUE);
if($_POST['submit'] === "OK")
{
	if($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		for($i = 0; $file[$i]; $i++)
		{
			if($file[$i]['login'] === $_POST['login'])
			{
				if ($_POST['oldpw'] == $file[$i]['passwd'])
					$file[$i]['passwd'] = $_POST['newpw'];
				else
					echo "ERROR\n";
			}
		}
	}
}
file_put_contents("database/db_user.json", json_encode($file));
?>

<html>
	<body>
		<form method="post" action="modify.php">
			Identifiant<input type="text" name="login"/><br/>
			Ancien mot de passe<input type="password" name="oldpw"/><br/>
			Nouveau mot de passe<input type="password" name="newpw"/><br/>
			<input type="submit" name="submit" value="OK"/>
		</form>
	</body>
</html>
