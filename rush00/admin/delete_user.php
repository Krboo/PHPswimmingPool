<?php
session_start();
require_once("../redirect.php");
echo '<h1>Delete Users</h1>';
$file = json_decode(file_get_contents('../database/db_user.json'), TRUE);
if($_SESSION['admin'] !== 1)
	redirect('index.php');

if($_POST && $_POST['id'] && $_POST['submit'] === "DELETE")
{
	for ($i = 0; $file[$i]; $i++) {
		if ($file[$i]['id'] === $_POST['id'])
			unset($file[$i]);
	}
}
else {
	foreach ($file as $user) {
		echo '<p>' . $user['login'] . '</p>';
		echo '<form action="delete_user.php" method="post">
			<input type="text" style="display:none;" name="id" value="' . $user['id'] . '" />
			<input type="submit" name="submit" value="DELETE" />
		</form>';
	}
}
file_put_contents("../database/db_user.json", json_encode($file));
?>

<link href="../style/style.css" type="text/css" rel="stylesheet"/>
<a href="../prod.php" >Retourner au shop</a>
