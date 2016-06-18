<?php

session_start();
$file = json_decode(file_get_contents('../database/db_user.json'));
foreach ($file as $key) {
	if($key->login == $_SESSION['login'])
	{
		if($key->admin == 1)
		{
			$admin = 1;
			exit();
		}
		else {
			echo "Acces Refuse";
		}
	}
}
echo $admin;
if(isset($_SESSION['name']))
	echo "youplaboum";
else {
	return ;
	//header('Location: ../index.php');
}

 ?>
