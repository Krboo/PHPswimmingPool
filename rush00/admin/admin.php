<?php
session_start();
require_once('../redirect.php');
$file = json_decode(file_get_contents('../database/db_user.json'), TRUE);
foreach ($file as $key)
{

	if($key['login'] == $_SESSION['login'])
	{
		if($key['admin'] == 1)
		{
			$_SESSION['admin'] = 1;
			redirect('admin/admin_panel.php');
		}
		else {
			echo "Acces Refuse";
		}
	}
}
 ?>
